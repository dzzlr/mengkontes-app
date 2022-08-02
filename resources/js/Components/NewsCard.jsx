import React from 'react';
import { Link } from '@inertiajs/inertia-react';

const isNewsCard = (news) => {
  return news.map((data, i) => {
    return (
      <div
        key={i}
        className="w-full md:w-2/3 lg:w-1/2 flex flex-col mx-auto px-4"
      >
        <div className="flex flex-row mx-auto gap-5 py-2">
          <div className="w-1/4 md:w-1/3 lg:w-1/4">
            <p className="pt-1 text-slate-500">{data.created_at}</p>
          </div>
          <div className="w-3/4 md:w-2/3 lg:w-3/4">
            <Link
              href={route('news.show', { id: data.slug })}
              className="font-semibold text-lg hover:underline hover:underline-offset-1 duration-150 ease-in-out"
            >
              {data.title}
            </Link>
            {/* <p className="font-semibold text-lg"></p> */}
            <p className="text-slate-500">{data.content}</p>
          </div>
          {/* <p>This is slug: {data.slug}</p> */}
        </div>
      </div>
    );
  });
};

const noNewsCard = () => {
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

const NewsCard = ({ news }) => {
  return !news ? noNewsCard() : isNewsCard(news);
};

export default NewsCard;
