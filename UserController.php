public function index()
{
$users = User::all();
return view('users.index', ['users' => $users]);
}

public function store(Request $request)
{
$user = new User;
$user->name = $request->name;
$user->email = $request->email;
$user->password = $request->password;
$user->save();

return redirect('/users');
}