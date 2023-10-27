import Uppy from '@uppy/core';
import Dashboard from '@uppy/dashboard';
import '@uppy/core/dist/style.min.css'; // Import CSS của Uppy
import '@uppy/dashboard/dist/style.min.css'; // Import CSS của Dashboard

const uppy = Uppy()
    .use(Dashboard, {
        inline: true,
        target: '#uppy',
    });

