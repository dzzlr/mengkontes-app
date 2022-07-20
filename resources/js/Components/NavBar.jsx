import React, { useState } from 'react';
import { Link } from '@inertiajs/inertia-react';
import NavBarLink from '@/Components/NavBarLink';
import ApplicationLogo from '@/Components/ApplicationLogo';

export default function NavBar() {
  const [isOpen, setIsOpen] = useState(false);
  return (
    <div className="sticky top-0 z-50 bg-white py-1 md:py-3 border-b-2 border-slate-100">
      <div className="flex flex-col container mx-auto lg:px-6 lg:flex-row">
        <div className="flex items-center justify-between px-4 py-2 lg:py-0">
          <div className="flex flex-row">
            <ApplicationLogo className="translate-y-1.5 mr-1 text-indigo-600"/>
            <Link href={route('home')} className="font-bold text-lg">
              Meng<span className="text-indigo-600">Kontes</span>
            </Link>
          </div>
          <div>
            <button
              onClick={() => setIsOpen(!isOpen)}
              className="focus:outline-none block lg:hidden"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                className="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                strokeWidth={2}
              >
                <path
                  className={!isOpen ? 'block' : 'hidden'}
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  d="M4 6h16M4 12h16M4 18h16"
                />
                <path
                  className={isOpen ? 'block' : 'hidden'}
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  d="M6 18L18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>
        </div>
        <div
          className={`${
            isOpen ? 'block' : 'hidden'
          } lg:flex flex-col lg:flex-row justify-between w-full py-2 lg:py-0`}
        >
          <div className="flex flex-col lg:flex-row">
            <NavBarLink
              href={route('competitions.index')}
              active={route().current('competitions.index')}
            >
              🏆 Competitions
            </NavBarLink>
            <NavBarLink href="" active="">
              📆 Events
            </NavBarLink>
            <NavBarLink href="" active="">
              📄 Blogs
            </NavBarLink>
            <NavBarLink href="" active="">
              📰 News
            </NavBarLink>
          </div>
          <div className="flex flex-col gap-2 lg:gap-4 lg:flex-row">
            <NavBarLink href={route('login')} active="">
              Log In
            </NavBarLink>
            <Link
              href={route('register')}
              className="px-3 py-1 lg:py-1 rounded-md font-normal outline outline-1 bg-gradient-to-t from-slate-100 to-white outline-slate-200 text-slate-600 hover:text-black hover:shadow-inner duration-150 ease-in-out"
            >
              Sign Up
            </Link>
          </div>
        </div>
      </div>
    </div>
  );
}
