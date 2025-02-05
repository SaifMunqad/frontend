import {Component} from 'react';
import SidebarElement from '@/Layouts/sidebar/SidebarElement.jsx';

export default class Sidebar extends Component{
  render() {
    return (
          <div className="z-10 min-h-screen bg-gray-200 dark:bg-gray-950 fixed">
            <div className="sidebar min-h-screen w-[3.30rem] overflow-hidden border-r-2 border-gray-200 dark:border-gray-800 focus:w-56 hover:w-56 dark:hover:bg-gray-950 hover:shadow-lg overflow-y-auto">
              <div className="flex h-screen flex-col justify-between pt-2 pb-0">
                <div>
                  <ul className="mt-10 space-y-2 tracking-wide">
                    <SidebarElement pageName="Home" pageLink="/store/home">
                      <path
                          className="fill-current text-gray-50 dark:text-gray-300 group-hover:text-cyan-300"
                          d="M19.006 3.705a.75.75 0 1 0-.512-1.41L6 6.838V3a.75.75 0 0 0-.75-.75h-1.5A.75.75 0 0 0 3 3v4.93l-1.006.365a.75.75 0 0 0 .512 1.41l16.5-6Z"></path>
                      <path fillRule="evenodd"
                            className="fill-current text-gray-600 group-hover:text-cyan-600"
                            d="M3.019 11.114 18 5.667v3.421l4.006 1.457a.75.75 0 1 1-.512 1.41l-.494-.18v8.475h.75a.75.75 0 0 1 0 1.5H2.25a.75.75 0 0 1 0-1.5H3v-9.129l.019-.007ZM18 20.25v-9.566l1.5.546v9.02H18Zm-9-6a.75.75 0 0 0-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75H9Z"
                            clipRule="evenodd"></path>
                    </SidebarElement>
                    {/* Add more SidebarSubElement components as needed */}
                  </ul>
                </div>
              </div>
            </div>
          </div>
    );
  }
}