<x-admin-layout>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9fafb;
    }

    .table-container {
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
  }

    .container {
      /* padding: 20px; */
      vertical-align: middle;
      display: inline-block;
      min-width: 100%;
      /* box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); */
      overflow: hidden;
      border-radius: 0.5rem;
      border-bottom: 1px solid #e5e7eb;
    }

    .header h3 {
    font-size: 24px;
    color: #1f2937;
    font-weight: 600;
  }

    /* h2 {
      font-size: 24px;
      color: #1f2937;
      font-weight: 600;
      margin-bottom: 20px;
      text-align: center;
    } */

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    label {
      font-size: 14px;
      font-weight: 600;
      color: #374151;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #e5e7eb;
      border-radius: 6px;
      font-size: 14px;
      color: #374151;
      background: #f9fafb;
    }

    input[type="file"] {
      padding: 5px;
    }

    input:focus, textarea:focus {
      border-color: #6366f1;
      outline: none;
    }

    textarea {
      resize: vertical;
      height: 100px;
    }

    .btn-submit {
      padding: 10px 20px;
      font-size: 16px;
      color: #ffffff;
      background-color: #6366f1;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }

    .btn-submit:hover {
      background-color: #4f46e5;
    }

    .back-link {
      text-align: center;
      margin-top: 20px;
    }

    .back-link a {
      text-decoration: none;
      color: #6366f1;
      font-weight: bold;
    }

    .back-link a:hover {
      color: #4f46e5;
    }
  </style>
</head>
<body>
  <div class="container">
      <h2 class="text-gray-700 text-3xl font-medium font-bold">Tambah Menu</h2>
    {{-- <div class="header">
    </div> --}}
    <div class="table-container mt-8">
    <form action="/admin/editMenu/{{ $menu->id }}" method="POST" enctype="multipart/form-data">
      <!-- CSRF Token -->
      @csrf
      @method('PUT')

      <div data-hs-file-upload='{
        "url": "/upload",
        "maxFiles": 1,
        "singleton": true
      }'>
      <label for="path_img">Gambar</label>
      <input id="path_img" name="gambar" type="file" />
      </div>
      <div>
        <label for="name">Nama Menu</label>
        <input type="text" id="name" name="nama_menu" value="{{ $menu->name }}" placeholder="Masukkan nama menu" required>
      </div>
      <div>
        <label for="category">Category</label>
        <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" name="category" id="category">
          <option value="food">Makanan</option>
          <option value="drink">Minuman</option>
        </select>
      </div>
      <div>
        <label for="status">Status</label>
        <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" name="status" id="status">
          <option value="available">Available</option>
          <option value="empty">Empty</option>
        </select>
      </div>
      <div>
        <label for="desc">Deskripsi</label>
        <textarea id="desc" name="deskripsi" placeholder="Masukkan deskripsi menu" required>{{ $menu->desc }}</textarea>
      </div>
      <div>
        <label for="price">Harga</label>
        <input type="number" id="price" value="{{ $menu->price }}" name="harga" placeholder="Masukkan harga menu" required>
      </div>
      <button type="submit" class="btn-submit">Simpan</button>
    </form>
    <div class="back-link">
      <a href="/admin/menu">Kembali ke Daftar Menu</a>
    </div>
  </div>
</div>
</body>
</html>

</x-admin-layout>