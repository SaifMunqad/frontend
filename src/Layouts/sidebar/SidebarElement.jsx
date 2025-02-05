import { Component } from 'react';

export default class SidebarElement extends Component {
  render() {
    // eslint-disable-next-line react/prop-types
    let {pageLink, pageName, children} = this.props;
    return (
        <li className="min-w-max">
          <a
              href={pageLink}
              aria-label={pageName}
              className={`bg group flex items-center space-x-4 px-4 py-3 dark:text-gray-300 pageName'bg-gradient-to-r from-sky-600 to-cyan-400dark:text-gray-800 text-gray-300 dark:text-white dark:text-gray-600 '}`}
          >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                className="size-5 rtl:ml-4"
            >
              {children}
            </svg>
            <span
                className="-mr-1 dark:text-gray-300 group-hover:text-gray-500">
          {pageName}
        </span>
          </a>
        </li>
    );
  }
}
