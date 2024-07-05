document.addEventListener('DOMContentLoaded', function() {
    const cameras = [
        { id: 1, name: 'Canon EOS 5D Mark IV' },
        { id: 2, name: 'Nikon D850' },
        { id: 3, name: 'Sony Alpha A7 III' },
        { id: 4, name: 'Fujifilm XA10' },
        { id: 5, name: 'Samsung Nx3000'}
        // tambahkan jenis kamera lainnya sesuai kebutuhan
    ];

    // Tampilkan daftar kamera sebagai list
    const cameraList = document.getElementById('camera-list');
    cameras.forEach(camera => {
        const li = document.createElement('li');
        li.textContent = `${camera.name}`;
        cameraList.appendChild(li);
    });

    // Tampilkan opsi pilihan kamera dalam select
    const cameraSelect = document.getElementById('camera-id');
    cameras.forEach(camera => {
        const option = document.createElement('option');
        option.value = camera.id;
        option.textContent = `${camera.name}`;
        cameraSelect.appendChild(option);
    });
});