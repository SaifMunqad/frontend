import React from 'react';
import * as PropTypes from 'prop-types';

class Button extends React.Component {
  render() {
    let {
      buttonId,
      buttonName,
      pageSelected,
      svgId,
      children,
    } = this.props;
    return (
        <button
            aria-label={buttonId}
            id={buttonId}
            className={`bg flex w-full items-center justify-between space-x-4 px-4 py-3 dark:text-gray-300 ${pageSelected
                ? 'bg-gradient-to-r from-sky-600 to-cyan-400 dark:text-gray-800 text-gray-300 dark:text-white'
                : 'dark:text-gray-600 '}`}
        >
          <a className="flex items-center space-x-4">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                className="size-5 rtl:ml-4"
                viewBox="0 0 24 24"
                fill="currentColor"
            >
              {children}
            </svg>
            <span
                className="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap group-hover:text-gray-200 text-white">
          {buttonName}
        </span>
          </a>
          <svg
              className={`size-3 transform ${pageSelected
                  ? ''
                  : '-rotate-90'} transition`}
              id={svgId}
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 10 6"
          >
            <path
                stroke="currentColor"
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth="2"
                d="m1 1 4 4 4-4"
            />
          </svg>
        </button>
    );
  }
}

Button.propTypes = {
  buttonId: PropTypes.any,
  buttonName: PropTypes.any,
  pageSelected: PropTypes.any,
  svgId: PropTypes.any,
  children: PropTypes.any
}
