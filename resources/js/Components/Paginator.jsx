import { Link } from '@inertiajs/inertia-react';

const Paginator = ({ meta }) => {
  // console.log(meta)
  const prev = meta.links[0].url;
  const next = meta.links[meta.links.length - 1].url;
  const current = meta.current_page;
  return (
    <div className="flex gap-2">
      <div className="px-2 py-2 bg-slate-200 text-slate-400 outline outline-2 outline-slate-200 text-sm font-semibold rounded-md duration-150 ease-in-out">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          className="h-4 w-4"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          strokeWidth={2}
        >
          <path
            strokeLinecap="round"
            strokeLinejoin="round"
            d="M15 19l-7-7 7-7"
          />
        </svg>
      </div>
      <div className="px-2.5 py-1.5 outline outline-2 outline-indigo-600 text-sm font-semibold text-indigo-600 rounded-md  duration-150 ease-in-out">
        1
      </div>
      <div className="px-2.5 py-1.5 outline outline-2 outline-slate-200 text-sm font-semibold rounded-md hover:outline-indigo-600 hover:bg-indigo-600 hover:text-white duration-150 ease-in-out">
        2
      </div>
      <div className="px-2.5 py-1.5 outline outline-2 outline-slate-200 text-sm font-semibold rounded-md hover:outline-indigo-600 hover:bg-indigo-600 hover:text-white duration-150 ease-in-out">
        3
      </div>
      <div className="px-2 py-2 outline outline-2 outline-slate-200 text-sm font-semibold rounded-md hover:outline-indigo-600 hover:bg-indigo-600 hover:text-white duration-150 ease-in-out">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          className="h-4 w-4"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          strokeWidth={2}
        >
          <path strokeLinecap="round" strokeLinejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </div>
    </div>
  );
};

export default Paginator;
