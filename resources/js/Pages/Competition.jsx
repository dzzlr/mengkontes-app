import React from 'react';
import { Link, Head } from '@inertiajs/inertia-react';

export default function Welcome(props) {
    return (
        <>
            <Head title="Competitions" />
            <div className="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                <h1 className='text-white text-7xl font-bold text-center'>A Massive <br/>Hacking Playground</h1>
            </div>
        </>
    );
}