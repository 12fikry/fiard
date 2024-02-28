function linker(reqstate) {
    switch (reqstate) {
        case 'login':
            window.location.replace('login.php');
            break;
        case 'home':
            window.location.replace('home.php');
            break; 
        case 'album':
            window.location.replace('album.php');
            break;
        case 'profile':
            window.location.replace('profile.php');
            break;
        case 'logout':
            window.location.replace('action/logout.php');
            break;
        default:
            return;
    }
}

function linker3(reqstate) {
    switch (reqstate) {
        case 'opennav':
            var sn = document.getElementById('sidenav');
            sn.style.transform = (sn.style.transform === 'translateX(100vw)') ? "translateX(0)" : "translateX(100vw)";
            break;
        case 'dialogy':
            var asd = document.getElementById('add-dialog');
            if (asd) {
                asd.style.display = (asd.style.display === 'none' || asd.style.display === '') ? "flex" : "none";
            }
            break;
        case 'dialoge':
            var esd = document.getElementById('edit-dialog');
            if (esd) {
                esd.style.display = (esd.style.display === 'none' || esd.style.display === '') ? "flex" : "none";
            }
            break;
        case 'dialog3':
            var esd = document.getElementById('edit-dialog2');
            if (esd) {
                esd.style.display = (esd.style.display === 'none' || esd.style.display === '') ? "flex" : "none";
            }
            break;
        default:
        return;
    }
}


var loadFile = function(event) {
    var output = document.getElementById('prev');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src)
    }
};

function LoadPhoto(ID) {
    return window.location.replace("interaction.php?ID=" + ID);
}
function LoadAlbum(ID) {
    return window.location.replace("albumcontent.php?ID=" + ID);
}

function LoadEditAlbum(btnElem) {
    const form = document.forms.EDITALBUM;
    const values = btnElem.dataset;
    Object.keys(values).forEach((key) => {
        if (form[key]) 
            form[key].value = values[key];
    });
}
function LoadDataPhoto(btnElem) {
    const form = document.forms.DATAPHOTO;
    const values = btnElem.dataset;
    Object.keys(values).forEach((key) => {
        if (form[key]) 
            form[key].value = values[key];
    });
}
