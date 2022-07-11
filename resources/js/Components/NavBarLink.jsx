import React from 'react';
import { Link } from '@inertiajs/inertia-react';

export default function NavBarLink({ href, active, children }) {
    return (
        <Link
            href={href}
            className={
                active
                    ? 'inline-flex items-center px-3 pt-1 text-sm font-medium leading-5 text-gray-100 transition duration-150 ease-in-out'
                    : 'inline-flex items-center px-3 pt-1 text-sm font-medium leading-5 text-gray-400 hover:text-gray-100 focus:text-gray-100 transition duration-150 ease-in-out'
            }
        >
            {children}
        </Link>
    );
}
