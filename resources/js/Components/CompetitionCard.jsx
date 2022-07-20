import React from 'react';
import { Link } from '@inertiajs/inertia-react';

const isCompetitionsCard = (competitions) => {
  return competitions.map((data, i) => {
    return (
      <div key={i} className="w-full px-4 lg:w-1/3 xl:w-1/4">
        <div className="rounded-xl shadow overflow-hidden mb-10">
          <img
            className="w-full"
            src="https://source.unsplash.com/360x200?programming"
            alt="programming"
          />
          <div className="pt-3 pb-5 px-5">
            <h3 className="mb-1 block font-bold text-xl text-black truncate">
              {data.title}
            </h3>
            <p className="mb-3 font-normal text-base text-slate-500">
              08 Jul, 22:00, 2021 - 28 Dec, 23:09
            </p>
            <div className="flex gap-2">
              <Link
                href=""
                className="py-2.5 px-4 text-sm font-semibold tracking-wide rounded-md text-white bg-indigo-600 hover:shadow-lg hover:opacity-80 duration-150 ease-in-out"
              >
                Sign Up
              </Link>
              <Link
                href=""
                className="py-3 px-3 font-semibold tracking-wide rounded-md text-slate-500 bg-slate-200 hover:shadow-lg hover:bg-slate-300 duration-150 ease-in-out"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  className="h-5 w-5"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fillRule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clipRule="evenodd"
                  />
                </svg>
              </Link>
            </div>
          </div>
        </div>
      </div>
    );
  });
};

const noCompetitionsCard = () => {
  return (
    <div className="container mx-auto py-4 lg:px-6">
      <div className="w-full">
        <h3 className="text-center text-slate-500 text-md lg:text-lg">
          There are currently no competitions available
        </h3>
      </div>
    </div>
  );
};

const CompetitionCard = ({ competitions }) => {
  return !competitions
    ? noCompetitionsCard()
    : isCompetitionsCard(competitions);
};

export default CompetitionCard;
