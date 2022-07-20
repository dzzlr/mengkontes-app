import React from "react";
import CompetitionNavLink from "@/Components/CompetitionNavLink";

export default function CompetitionNav() {
    return (
        <div className="bg-white border-b-2 border-slate-100">
            <div className="flex flex-row container mx-auto px-4 lg:px-10">
                <CompetitionNavLink
                    href={route("competitions.index")}
                    active={route().current("competitions.index")}
                >
                    All
                </CompetitionNavLink>
                <CompetitionNavLink
                    href={route("competitions.show", { id: 'capture-the-flag' })}
                    active={route().current("competitions.index", { id: 'capture-the-flag' })}
                >
                    Capture The Flag
                </CompetitionNavLink>
                <CompetitionNavLink
                    href={route("competitions.show", { id: 'competitive-programming' })}
                    active=""
                >
                    Competitive Programming
                </CompetitionNavLink>
                <CompetitionNavLink
                    href={route("competitions.show", { id: 'data-mining' })}
                    active=""
                >
                    Data Mining
                </CompetitionNavLink>
            </div>
        </div>
    );
}
