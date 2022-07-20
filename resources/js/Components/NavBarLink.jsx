import React from 'react';
import { Link } from '@inertiajs/inertia-react';

export default function NavBarLink({ href, active, children }) {
  return (
    <Link
      href={href}
      className={
        active
          ? 'block px-3 py-1 lg:py-1 font-normal text-indigo-600 grayscale-0 duration-150 ease-in-out'
          : 'block px-3 py-1 lg:py-1 font-normal text-slate-600 hover:text-indigo-600 grayscale hover:grayscale-0 duration-150 ease-in-out'
      }
    >
      {children}
    </Link>
  );
}
