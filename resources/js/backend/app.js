import * as coreui from '@coreui/coreui'
const $ = require('jquery')

$("#toggle-sidebar").on("click", function () {
    coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle();
});
