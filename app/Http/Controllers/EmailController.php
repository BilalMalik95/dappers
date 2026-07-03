<?php

namespace App\Http\Controllers;

use App\Models\EmailAccount;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\log;
use PhpParser\Node\Stmt\Catch_;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emailAccounts = EmailAccount::all();
        return view('admin.emailaccounts.index', compact('emailAccounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.emailaccounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = validator::make($request->all(), [
            'mail_mailer' => 'required|string',
            'mail_host' => 'required|string',
            'mail_port' => 'required|numeric',
            'mail_username' => 'required|string',
            'mail_password' => 'required|string',
            'mail_encryption' => 'required|string',
            'mail_from_address' => 'required|string',
            'mail_from_name' => 'required|string',
            'status' => 'required|boolean',
        ]);
        
        if ($validate->fails()) {
      
            return redirect()
                ->back()
                ->withErrors($validate)
                ->withInput();
        }
        DB::beginTransaction();
        try {

            $emailAccount = EmailAccount::create([
                'mail_mailer' => $request->mail_mailer,
                'mail_host' => $request->mail_host,
                'mail_port' => $request->mail_port,
                'mail_username' => $request->mail_username,
                'mail_password' => $request->mail_password,
                'mail_encryption' => $request->mail_encryption,
                'mail_from_address' => $request->mail_from_address,
                'mail_from_name' => $request->mail_from_name,
                'status' => $request->status,
            ]);


            DB::commit();
            return redirect('admin/email-accounts')->with('success', 'account added successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error("account store:" . $e->getMessage());
            return redirect()->back()->with('error', 'failed to create account' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(EmailAccount $emailAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $emailAccount = EmailAccount::find($id);
        return view('admin.emailaccounts.update', compact('emailAccount'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmailAccount $emailAccount)
    {
        $validate = validator::make($request->all(), [
            'mail_mailer' => 'required|string',
            'mail_host' => 'required|string',
            'mail_port' => 'required|numeric',
            'mail_username' => 'required|string',
            'mail_password' => 'required|string',
            'mail_encryption' => 'required|string',
            'mail_from_address' => 'required|string',
            'mail_from_name' => 'required|string',
            'status' => 'required|boolean',
        ]);
        if($validate->fails()){
            return redirect('admin/email-accounts/edit/'.$request->id)
           ->withErrors($validate)
            ->withInput();
        }
        DB::beginTransaction();
        try {
            $emailAccount = EmailAccount::find($request->id);

            $emailAccount->update([
                  'status' => $request->status,
                  'mail_mailer' => $request->mail_mailer,
                  'mail_host' => $request->mail_host,
                  'mail_port' => $request->mail_port,
                  'mail_username' => $request->mail_username,
                  'mail_password' => $request->mail_password,
                  'mail_encryption' => $request->mail_encryption,
                  'mail_from_address' => $request->mail_from_address,
                  'mail_from_name' => $request->mail_from_name,
            ]);
            $emailAccount->update();
            DB::commit();
            return redirect('admin/email-accounts')->with('success','Email account Upadte successfully');
        } catch (Exception $e) {
            DB::rollBack();
            log::error('email acccount update:',$e->getMessage());
            return redirect()->back()->with('Error','update Failed!',$e->getMessage());
           
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteAccount = EmailAccount::find($id)->delete();
        return redirect('admin/email-accounts')->with('success','Accounts Delete successfully');
    }
}
