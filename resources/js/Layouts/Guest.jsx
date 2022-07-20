import React from 'react';
import ApplicationLogo from '@/Components/ApplicationLogo';
import NavBar from '@/Components/NavBar';
import { Link } from '@inertiajs/inertia-react';

export default function Guest({ children }) {
  return (
    <>
      <NavBar />
      <div className="min-h-screen bg-gradient-to-tl from-indigo-200 via-red-200 to-yellow-100">
        <div className="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 lg:pt-14 lg:pb-14">
          <div>
            {/* <Link href="/">
            <ApplicationLogo className="w-20 h-20 fill-current text-gray-500" />
          </Link> */}
          </div>

          <div className="w-full sm:max-w-md mt-6 px-6 py-4 bg-white border-2 shadow-md overflow-hidden sm:rounded-lg">
            {children}
          </div>
        </div>
      </div>
    </>
  );
}
