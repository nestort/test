<?php

namespace App\Http\Livewire;

use App\Models\State;
use Livewire\Component;
use App\Models\User;
use App\Models\City;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $user;
    public $password_confirmation;
    public $selectedState;
    public $cities;

    protected $rules = [
        'user.name' => 'required',
        'user.password' => 'min:6|max:12|required|required_with:password_confirmation|same:password_confirmation',
        'password_confirmation' => 'min:6|max:12',
        'user.email' => 'required|unique:users,email|regex:/^.+@.+$/i',
        'user.date_birth'=>'required|date|before:-18 years',

    ];

    protected $messages = [
        'user.name.required' => 'El nombre de usuario es requerido.',

        'user.password.min' => 'La contraseña del usuario debe tener al menos 6 caracteres.',
        'user.password.max' => 'La contraseña del usuario debe tener menos de 12 caracteres.',
        'user.password.required' => 'La contraseña es requerida.',
        'user.password.same' => 'La contraseña no coincide.',

        'password_confirmation.min' => 'La contraseña del usuario debe tener al menos 6 caracteres.',
        'password_confirmation.max' => 'La contraseña del usuario debe tener menos de 12 caracteres.',

        'user.email.required' => 'El correo es requerido.',
        'user.email.unique' => 'El correo ya se encuentra registrado.',
        'user.email.regex' => 'El correo tiene un formato no valido.',

        'user.date_birth.required' => 'La fecha de nacimiento es requerida.',
        'user.date_birth.date' => 'La fecha tiene un formato no valido.',
        'user.date_birth.before' => 'Eres menor de edad :( ',
    ];


    public function render()
    {
        return view('livewire.register',['states' => State::all()]);
    }
    public function updatedSelectedState($state_id)
    {
        $this->cities = City::where('state_id',$state_id)->get();
    }
    public function submit()
    {
        $this->validate();
        $newUser = User::create($this->user);
        $newUser->password = bcrypt($this->user['password']);
        $newUser->save();
        Auth::loginUsingId($newUser->id);
        return redirect()->intended('/dashboard');

    }
}
