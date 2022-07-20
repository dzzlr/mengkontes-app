import React from "react";
import { Link } from "@inertiajs/inertia-react";

export default function CompetitionNavLink({ href, active, children }) {
    return (
        <Link
            href={href}
            className={
                active
                    ? "px-3 py-2 font-normal text-black border-b-2 border-indigo-600 duration-150 ease-in-out text-xs md:text-sm"
                    : "px-3 py-2 font-normal text-slate-500 hover:bg-slate-100 duration-150 ease-in-out text-xs md:text-sm"
            }
        >
            {children}
        </Link>
    );
}
