import React from 'react';
import NavBar from '@/Components/NavBar';
import { Link, Head } from '@inertiajs/inertia-react';

export default function Welcome(props) {
  return (
    <>
      <Head title="Home" />
      <div className="min-h-screen bg-white">
        <NavBar />
        <div className="pt-24 pb-24 flex flex-col justify-center items-center align-middle text-center">
          <div className="text-lg text-white text-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              className="h-1/2 w-1/2 mx-auto"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fillRule="evenodd"
                d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                clipRule="evenodd"
              />
            </svg>
          </div>
          <div className="mb-3 md:w-1/2 text-2xl lg:text-5xl font-bold text-black">
            <p className="leading-tight">
              The Coding Platform Competition Building the Future.
            </p>
          </div>
          <div className="md:w-1/2 text-md text-slate-400">
            Join a dynamically growing hacking community and take your
            cybersecurity skills to the next level through the most captivating,
            gamified, hands-on training experience!
          </div>
        </div>
      </div>
    </>
  );
}
