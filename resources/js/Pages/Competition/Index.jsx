import React, { useState } from 'react';
import NavBar from '@/Components/NavBar';
import CompetitionNav from '@/Components/CompetitionNav';
import CompetitionCard from '@/Components/CompetitionCard';
import Paginator from '@/Components/Paginator';
import { Link, Head } from '@inertiajs/inertia-react';

export default function Competition(props) {
  return (
    <>
      <Head title="Competitions" />
      <div className="min-h-screen bg-white">
        <NavBar />
        <CompetitionNav />

        <section className="container mx-auto py-4 px-4 lg:px-10">
          <div className="flex gap-4">
            <div className="w-full md:w-1/2">
              <h1 className="mb-2 block font-bold text-2xl lg:text-4xl">
                Competitions
              </h1>
              <p className="mb-3 font-normal leading-tight text-slate-500">
                Grow your coding skills by competing in our exciting
                competitions. Find help in the documentation or learn about
                Community Competitions.
              </p>
            </div>
            <div className="hidden md:w-1/2"></div>
          </div>

          <form action="" method="post">
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Search competitions"
              className="mt-1 w-full py-2 px-6 rounded-full border-none outline outline-1 outline-slate-400 focus:outline-none focus:ring-slate-700 focus:ring-1 focus:border-slate-700"
            />
          </form>

          <hr className="mt-4 bg-slate-200" />
        </section>

        <section className="flex flex-wrap container mx-auto lg:px-6">
          <CompetitionCard competitions={props.competition.data} />
        </section>

        <div className="flex justify-center items-center py-4">
          <Paginator meta={props.competition.meta}/>
        </div>
      </div>
    </>
  );
}
