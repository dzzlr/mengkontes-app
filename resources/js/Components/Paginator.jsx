import { Link } from "@inertiajs/inertia-react";

const Paginator = ({ meta }) => {
  // console.log(meta)
  const prev = meta.links[0].url;
  const next = meta.links[meta.links.length - 1].url;
  const current = meta.current_page;
  return (
    <div>Ini Paginator</div>
  )
}

export default Paginator