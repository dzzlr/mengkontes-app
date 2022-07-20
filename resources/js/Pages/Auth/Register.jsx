import React, { useEffect } from 'react';
import Button from '@/Components/Button';
import Guest from '@/Layouts/Guest';
import Input from '@/Components/Input';
import Label from '@/Components/Label';
import ValidationErrors from '@/Components/ValidationErrors';
import { Head, Link, useForm } from '@inertiajs/inertia-react';

export default function Register() {
  const { data, setData, post, processing, errors, reset } = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
  });

  useEffect(() => {
    return () => {
      reset('password', 'password_confirmation');
    };
  }, []);

  const onHandleChange = (event) => {
    setData(
      event.target.name,
      event.target.type === 'checkbox'
        ? event.target.checked
        : event.target.value
    );
  };

  const submit = (e) => {
    e.preventDefault();

    post(route('register'));
  };

  return (
    <Guest>
      <Head title="Register" />

      <ValidationErrors errors={errors} />

      <div className="max-w-xl mx-auto text-center mb-4">
        <h4 className="font-bold text-2xl text-black tracking-tight">
          Sign Up
        </h4>
        <p className="text-base text-slate-500">
          Join the community of coding competitions!
        </p>
      </div>

      <form onSubmit={submit}>
        <div>
          <Label forInput="name" value="Name" />

          <Input
            type="text"
            name="name"
            value={data.name}
            className="mt-1 block w-full"
            autoComplete="name"
            isFocused={true}
            handleChange={onHandleChange}
            required
          />
        </div>

        <div className="mt-4">
          <Label forInput="email" value="Email" />

          <Input
            type="email"
            name="email"
            value={data.email}
            className="mt-1 block w-full"
            autoComplete="username"
            handleChange={onHandleChange}
            required
          />
        </div>

        <div className="mt-4">
          <Label forInput="password" value="Password" />

          <Input
            type="password"
            name="password"
            value={data.password}
            className="mt-1 block w-full"
            autoComplete="new-password"
            handleChange={onHandleChange}
            required
          />
        </div>

        <div className="mt-4">
          <Label forInput="password_confirmation" value="Confirm Password" />

          <Input
            type="password"
            name="password_confirmation"
            value={data.password_confirmation}
            className="mt-1 block w-full"
            handleChange={onHandleChange}
            required
          />
        </div>

        <div className="mt-4 flex flex-col">
          <button
            type="submit"
            className="mb-2 px-3 py-1 w-full lg:py-2 rounded-md font-normal outline outline-1 bg-gradient-to-t from-slate-100 to-white outline-slate-200 text-black hover:shadow-inner duration-150 ease-in-out"
          >
            Sign Up
          </button>
          <Link
            href={route('login')}
            className="mb-1 text-sm text-center underline underline-offset-1 text-slate-500 hover:text-blue-500"
          >
            Already registered?
          </Link>
        </div>
        {/* <div className="flex items-center justify-end mt-4">
          <Link
            href={route('login')}
            className="underline text-sm text-gray-600 hover:text-gray-900"
          >
            Already registered?
          </Link>

          <Button className="ml-4" processing={processing}>
            Register
          </Button>
        </div> */}
      </form>
    </Guest>
  );
}
