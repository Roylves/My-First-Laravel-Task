<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Yajra\Datatables\Datatables;
use App\DataTables\UsersDataTable;
use Illuminate\Support\Facades\DB;  /*add this line to fetch data from database table*/

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        $roles = Role::all();
        return view('datatables.index',compact('roles'));
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData(Request $request)
    {
    	// use number based on data set date instead of id, known as rownum
    	DB::statement(DB::raw('set @rownum=0'));
		$user = DB::table('users')->join('roles','roles.id','=','users.role_id')
    	->select([DB::raw('@rownum := @rownum + 1 AS rownum'),
    					  'users.*', 'roles.name as rolename']);
    	$datatables = Datatables::of($user);

    	if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('rownum', 'whereRaw', '@rownum + 1 like ?', ["%{$keyword}%"]);
        }

        return $datatables->addColumn('action', function ($query) {
                return '<a href="#" class="btn btn-xs btn-primary" style="background-color:green"><i class="glyphicon glyphicon-edit"></i> Edit</a> &nbsp; <a href="#" class="btn btn-xs btn-primary" style="background-color:red"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
            })->make(true);
    }

    public function create()
    {
        return view('backend.employees');
    }
}
