import 'react';
import Sidebar from '@/Layouts/sidebar/Sidebar.jsx';
import Header from '@/Layouts/header/Header.jsx';
// import Sidebar from './Sidebar'; // Uncomment if Sidebar component is to be used

// eslint-disable-next-line react/prop-types
function Layout({ children }) {
  return (
      <div className="font-sans antialiased dark:bg-gray-900">
        <Header />
        <div className="min-h-screen flex">
          {/* Uncomment and use Sidebar if needed */}
           <Sidebar />
          <main
              className="flex-1 mt-16 ml-16 mr-3 mb-3 rtl:ml-3 rtl:mr-16 bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-700 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2"
          >
            {children}
          </main>
        </div>
      </div>
  );
}

export default Layout;

