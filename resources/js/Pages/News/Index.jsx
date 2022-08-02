import React, { useState } from 'react';
import NavBar from '@/Components/NavBar';
// import Paginator from '@/Components/Paginator';
import { Link, Head } from '@inertiajs/inertia-react';
import NewsCard from '@/Components/NewsCard';

export default function News(props) {
  return (
    <>
      <Head title="News" />
      <div className="min-h-screen bg-white">
        <NavBar />
        {/* <CompetitionNav /> */}

        <section className="container mx-auto py-4 px-4 lg:px-10">
          <div className="flex gap-4">
            <div className="w-full md:w-1/2">
              <h1 className="mb-2 block font-bold text-2xl lg:text-4xl">
                News
              </h1>
              <p className="mb-3 font-normal leading-tight text-slate-500">
                Grow your coding skills by competing in our exciting
                competitions. Find help in the documentation or learn about
                Community Competitions.
              </p>
            </div>
            <div className="hidden md:w-1/2"></div>
          </div>

          <hr className="mt-4 bg-slate-200" />
        </section>
 
        <section className="container mx-auto mb-4 lg:px-6">
            {/* <p>{props.news.data}</p> */}
          <NewsCard news={props.news.data} />
        </section>

        {/* <div className="flex justify-center items-center py-4">
          <Paginator meta={props.competition.meta}/>
        </div> */}
      </div>
    </>
  );
}
