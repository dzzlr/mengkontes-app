import React from 'react';
// import NavBar from "@/Components/NavBar";
import { Link, Head } from '@inertiajs/inertia-react';
import NavBarPort from '@/Components/NavBarPort';

export default function Welcome(props) {
  return (
    <>
      <Head title="Home" />
      <NavBarPort />
      {/* Hero Section Start */}
      <section id="home" className="pt-36 pb-32 bg-slate-800">
        <div className="container md:px-20 lg:px-52">
          <div className="flex flex-wrap">
            <div className="w-full self-center px-4">
              <h1 className="mb-1 text-base font-semibold text-white">
                Hello Everyone, I'm
                <span className="block font-bold text-white text-4xl">
                  Fakhri Hassan Maulana
                </span>
              </h1>
              <h2 className="mb-5 font-thin text-lg text-white">
                Front End Developer | Data Scientist
              </h2>
              <p className="mb-10 font-thin leading-tight text-white">
                I have a keen interest in learning more in this field as it will
                help me grow in this line. Apart from that i'm very much
                passionate about programming which is my hobby. In short,
                programming is the skill that I love doing, and it's really
                great to be able to work with such creative people who have
                passion for their work.
              </p>

              <Link
                href=""
                className="py-3 px-8 text-sm font-semibold tracking-wide rounded-lg text-white bg-emerald-600 hover:shadow-lg hover:opacity-80 duration-150 ease-in-out"
              >
                Contact Me
              </Link>
            </div>
          </div>
        </div>
      </section>
      {/* Hero Section End */}

      {/* About Section Start */}
      <section id="about" className="pt-36 pb-32 bg-slate-900">
        <div className="container md:px-20 lg:px-52">
          <div className="flex flex-wrap">
            <div className="px-4 w-full mb-10 lg:w-1/2">
              <h4 className="mb-3 font-bold uppercase text-lg text-white">
                About Me
              </h4>
              <h2 className="mb-5 font-bold text-3xl text-white max-w-xl lg:text-4xl">
                Let's go take a look with me!
              </h2>
              <p className="font-thin text-base text-white lg:text-lg">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Facilis quidem totam nobis, repellendus optio eaque rerum quas
                et nulla earum similique voluptatem odit. Repellat, alias ex?
                Dolorem quod esse debitis!
              </p>
            </div>
            <div className="px-4 w-full lg:w-1/2">
              <h3 className="mb-4 font-semibold text-2xl text-white lg:text-3xl lg:pt-10">
                Let's be friends
              </h3>
              <p className="font-thin text-base text-white lg:text-lg">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Facilis quidem totam nobis, repellendus optio eaque rerum quas
                et nulla earum similique voluptatem odit. Repellat, alias ex?
                Dolorem quod esse debitis!
              </p>
            </div>
          </div>
        </div>
      </section>
      {/* About Section End */}
      {/* Client Section Start */}
      <section id="about" className="pt-36 pb-32 bg-slate-800">
        <div className="container md:px-20 lg:px-52">
          <div className="px-4 w-full">
            <div className="max-w-xl mx-auto text-center mb-16">
              <h4 className="mb-3 font-bold uppercase text-lg text-white tracking-wider">
                Clients
              </h4>
              <h2 className="mb-5 font-bold text-3xl text-white max-w-xl lg:text-4xl">
                Who Have Worked Together
              </h2>
              <p className="font-thin text-base text-white lg:text-lg">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Facilis quidem totam nobis, repellendus optio eaque rerum quas
                et nulla earum similique voluptatem odit. Repellat, alias ex?
                Dolorem quod esse debitis!
              </p>
            </div>
          </div>
          <div className="w-full px-4">
            <div className="flex flex-wrap items-center justify-center">
              <a
                href="https://www.instagram.com/lifeatedelab/?hl=id"
                className="max-w-[120px] mx-4 py-4 grayscale opacity-60 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8 duration-150 ease-in-out"
                target="_blank"
              >
                <img src="../assets/ede-logo.svg" alt="ede-logo.svg" />
              </a>
              <a
                href="https://www.instagram.com/dasprolab/?hl=id"
                className="max-w-[120px] mx-4 py-4 grayscale opacity-60 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8 duration-150 ease-in-out"
                target="_blank"
              >
                <img src="../assets/daspro-logo.svg" alt="daspro-logo.svg" />
              </a>
              <a
                href="https://kampungrotan.id/"
                className="max-w-[120px] mx-4 py-4 grayscale opacity-60 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8 duration-150 ease-in-out"
                target="_blank"
              >
                <img
                  src="../assets/kampungrotan-logo.svg"
                  alt="kampungrotan-logo.svg"
                />
              </a>
              <a
                href=""
                className="max-w-[120px] mx-4 py-4 grayscale opacity-60 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8 duration-150 ease-in-out"
              >
                <img src="../assets/hifarm-logo.svg" alt="hifarm-logo.svg" />
              </a>
            </div>
          </div>
        </div>
      </section>
      {/* Client Section End */}
      {/* Blogs Section Start */}
      <section id="blog" className="pt-36 pb-32 bg-slate-900">
        <div className="container md:px-20 lg:px-52">
          <div className="w-full px-4">
            <div className="max-w-xl mx-auto text-center mb-16">
              <h4 className="mb-3 font-bold uppercase text-lg text-white tracking-wider">
                Blogs
              </h4>
              <h2 className="mb-5 font-bold text-3xl text-white max-w-xl lg:text-4xl">
                New Article
              </h2>
              <p className="font-thin text-base text-white lg:text-lg">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Facilis quidem totam nobis, repellendus optio eaque rerum quas
                et nulla earum similique voluptatem odit. Repellat, alias ex?
                Dolorem quod esse debitis!
              </p>
            </div>
          </div>
          <div className="flex flex-wrap">
            <div className="w-full px-4 lg:w-1/2 xl:w-1/3">
              <div className="bg-slate-800 rounded-xl shadow overflow-hidden mb-10">
                <img
                  className="w-full"
                  src="https://source.unsplash.com/360x200?programming"
                  alt="programming"
                />
                <div className="py-8 px-6">
                  <h3 className="mb-3 block font-semibold text-xl text-white truncate">
                    Tips Belajar Programming
                  </h3>
                  <p className="mb-5 font-thin text-base text-slate-300">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At
                    quasi odio ab nostrum aut delectus ipsam reiciendis
                  </p>
                  <Link
                    href=""
                    className="py-2 px-4 text-sm font-semibold tracking-wide rounded-lg text-white bg-emerald-600 hover:shadow-lg hover:opacity-80 duration-150 ease-in-out"
                  >
                    Read More
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Blogs Section End */}
      {/* Contact Section Start */}
      <section id="contact" className="pt-36 pb-32 bg-slate-800">
        <div className="container">
          <div className="w-full px-4">
            <div className="max-w-xl mx-auto text-center mb-16">
              <h4 className="mb-3 font-bold uppercase text-lg text-white tracking-wider">
                Contact
              </h4>
              <h2 className="mb-5 font-bold text-3xl text-white max-w-xl lg:text-4xl">
                Contact Me
              </h2>
              <p className="font-thin text-base text-white lg:text-lg">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Facilis quidem totam nobis,
              </p>
            </div>
          </div>
          <form action="">
            <div className="w-full lg:w-1/2 lg:mx-auto">
              <div className="w-full mb-4 px-4">
                <label
                  name="name"
                  className="uppercase text-sm tracking-wide font-bold text-white"
                >
                  Name
                </label>
                <input
                  type="text"
                  name="name"
                  id="name"
                  className="mt-1 w-full bg-slate-900 text-white p-3 rounded-md border-none focus:outline-none focus:ring-emerald-600 focus:ring-1 focus:border-emerald-600"
                />
              </div>
              <div className="w-full mb-4 px-4">
                <label
                  name="name"
                  className="uppercase text-sm tracking-wide font-bold text-white"
                >
                  Email
                </label>
                <input
                  type="text"
                  name="name"
                  id="name"
                  className="mt-1 w-full bg-slate-900 text-white p-3 rounded-md border-none focus:outline-none focus:ring-emerald-600 focus:ring-1 focus:border-emerald-600"
                />
              </div>
              <div className="w-full mb-4 px-4">
                <label
                  name="name"
                  className="uppercase text-sm tracking-wide font-bold text-white"
                >
                  Message
                </label>
                <textarea
                  type="text"
                  name="name"
                  id="name"
                  className="mt-1 w-full h-32 bg-slate-900 text-white p-3 rounded-md border-none focus:outline-none focus:ring-emerald-600 focus:ring-1 focus:border-emerald-600"
                />
              </div>
              <div className="w-full mb-4 px-4">
                <button
                  type="submit"
                  className="py-3 px-4 w-full text-sm font-semibold tracking-wide rounded-lg text-white bg-emerald-600 hover:shadow-lg hover:opacity-80 duration-150 ease-in-out"
                >
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </section>
      {/* Contact Section End */}
    </>
  );
}
