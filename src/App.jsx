import './App.css'
import Layout from '@/Layouts/Layout.jsx';

function App() {
  function autoResize (textarea) {
    textarea.style.height = 'auto';
    textarea.style.height = (textarea.scrollHeight) + 'px';
  }

  document.addEventListener('DOMContentLoaded', function () {
    const textareas = document.querySelectorAll('textarea');
    textareas.forEach(textarea => {
      autoResize(textarea);
      textarea.addEventListener('input', () => autoResize(textarea));
    });
  });

  return (
    <Layout>
    </Layout>
  )
}

export default App
