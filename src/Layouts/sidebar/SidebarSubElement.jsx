import  { Component } from 'react';

export default class SidebarSubElement extends Component {
  render() {
    // eslint-disable-next-line react/prop-types
    const { pageLink, pageName, menuSelected, children } = this.props;
    return (
        <li className="min-w-max">
          <a
              href={pageLink}
              aria-label={pageName}
              className={`bg group flex items-center space-x-4 px-4 py-2 dark:text-gray-300 ${menuSelected ? "bg-gradient-to-r from-sky-800 to-cyan-500 text-gray-300 dark:text-white" : 'dark:text-gray-600'}`}
          >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                clipRule="evenodd"
                className="size-4 rtl:ml-4"
            >
              {children}
            </svg>
            <span className="px-1 dark:text-gray-300 group-hover:text-gray-500">
            {pageName}
          </span>
          </a>
        </li>
    );
  }
}
