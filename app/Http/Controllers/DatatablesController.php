<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\UserProfile;
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
        // $user = User::join('roles','roles.id','=','users.role_id')
        // ->select('users.id', 'roles.name as rolename')->get();
        $roles = Role::all();
        // $user = UserProfile::all();
        return view('datatables.index',compact('roles'));
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIndexData(Request $r)
    {
        // working example
        // DB::statement(DB::raw('set @rownum=0'));
        // $staff = DB::table('UserProfile')
        //     ->select([DB::raw('@rownum  := @rownum  + 1 AS rownum'),
        //                       'id','name','email','role_name','contact_number']);

        //trial 2
        // use number based on data set date instead of id, known as rownum
        DB::statement(DB::raw('set @rownum=0'));
        $staff = User::leftjoin('roles','roles.id','=','users.role_id')->select([
                DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                        'users.id as id',
                        'users.name as name',
                        'users.email as email',
                        'users.contact_number as contact_number',
                        'roles.name as rolename'
                    ]);

        $datatable = Datatables::of($staff);
        if ($keyword = $r->get('search')['value']) {
            $datatable->filterColumn('rownum', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
        }

        return $datatable
            ->addColumn('action', function ($staff) {
                return '<button class="btn btn-info open-modal" value="'.$staff->id.'"><i class="glyphicon glyphicon-edit"></i>Edit</button> &nbsp;
                <button class="btn btn-danger delete-link" value="'.$staff->id.'">
                    <i class="glyphicon glyphicon-remove"></i>Delete</button>';
            })
            ->make(true);
    }

    public function create(Request $r)
    {
        $user = User::create($r->all());
        return \Response::json($user);
    }

    public function edit($staff)
    {
        $user = User::find($staff);
        return \Response::json($user);
    }

    public function update(Request $r)
    {
        $user = User::find($r->user_id);
        $user->role_id = $r->role_id;
        $user->name = $r->name;
        $user->email = $r->email;
        $user->contact_number = $r->contact_number;
        $user->save();
        return \Response::json($user);
    }

    public function delete($staff)
    {
        $user = User::destroy($staff);
        return \Response::json($user);
    }
}