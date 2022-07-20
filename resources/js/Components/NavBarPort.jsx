import React, { useEffect, useState } from 'react';
import { Link } from '@inertiajs/inertia-react';
// import NavBarLink from "@/Components/NavBarLink";

export default function NavBarPort() {
  const [isOpen, setIsOpen] = useState(false);

  return (
    <nav className="bg-slate-600 bg-opacity-10 backdrop-blur-md z-[999] fixed top-0 left-0 w-full flex items-center border-b-2 border-slate-700">
      <div className="container md:px-20 lg:px-52">
        <div className="flex items-center justify-between relative">
          <div className="px-4">
            <Link href="#" className="font-bold text-lg text-white block py-4 tracking-wide">
              fakhrimln
            </Link>
          </div>
          <div className="px-4 flex items-center">
            <button
              onClick={() => setIsOpen(!isOpen)}
              id="hamburger"
              name="hamburger"
              type="button"
              className="block absolute right-4 lg:hidden">
              <span
                className={`${
                  isOpen ? 'block' : 'origin-top-left rotate-45'
                } my-2 w-[30px] h-[2px] block bg-white duration-150 ease-in-out`}></span>
              <span
                className={`${
                  isOpen ? 'block bg-white' : 'bg-transparent'
                } my-2 w-[30px] h-[2px] block duration-150 ease-in-out`}></span>
              <span
                className={`${
                  isOpen ? 'block' : 'origin-bottom-left -rotate-45'
                } my-2 w-[30px] h-[2px] block bg-white duration-150 ease-in-out`}></span>
            </button>
            <div
              className={`${
                !isOpen ? 'block' : 'hidden'
              } py-2 absolute bg-slate-700 shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full transition duration-150 ease-in-out lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none`}>
              <ul className="block lg:flex">
                <li className="group">
                  <Link
                    href="#"
                    className="text-base text-white py-2 mx-8 flex group-hover:text-emerald-600 duration-150 ease-in-out">
                    Home
                  </Link>
                </li>
                <li className="group">
                  <Link
                    href="#about"
                    className="text-base text-white py-2 mx-8 flex group-hover:text-emerald-600 duration-150 ease-in-out">
                    About
                  </Link>
                </li>
                <li className="group">
                  <Link
                    href="#blog"
                    className="text-base text-white py-2 mx-8 flex group-hover:text-emerald-600 duration-150 ease-in-out">
                    Blogs
                  </Link>
                </li>
                <li className="group">
                  <Link
                    href="#contact"
                    className="text-base text-white py-2 mx-8 flex group-hover:text-emerald-600 duration-150 ease-in-out">
                    Contact
                  </Link>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  );
}
