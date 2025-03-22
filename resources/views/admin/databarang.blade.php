<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kelola Barang</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body class="bg-gray-50 font-sans min-h-screen">
  <div class="container mx-auto px-4 py-8 max-w-7xl">
    <!-- Header dan Tombol Tambah -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
      <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Manajemen Barang</h1>
      <button
        onclick="openAddModal()"
        class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-5 py-3 text-white text-sm font-semibold shadow-md transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1"
        aria-label="Tambah Barang Baru"
      >
        <i class="fas fa-plus"></i> Tambah Barang
      </button>
    </div>

    <!-- Modal Tambah/Edit Barang -->
    <div
      id="itemModal"
      class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50 p-4"
      role="dialog"
      aria-modal="true"
      aria-labelledby="modalTitle"
    >
      <div class="relative w-full max-w-md rounded-lg bg-white p-6 shadow-lg">
        <button
          type="button"
          onclick="closeModal()"
          class="absolute right-4 top-4 text-gray-400 hover:text-gray-600 focus:outline-none"
          aria-label="Tutup Modal"
        >
          <i class="fas fa-times text-lg"></i>
        </button>
        <h2 id="modalTitle" class="mb-6 text-xl font-bold text-gray-900">Tambah Barang Baru</h2>

        <form id="itemForm" onsubmit="handleFormSubmit(event)" class="space-y-5">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama Barang</label>
            <input
              type="text"
              name="name"
              id="name"
              required
              class="mt-1 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 shadow-sm placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
              placeholder="Masukkan nama barang"
            />
          </div>

          <div>
            <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
            <select
              name="category"
              id="category"
              required
              class="mt-1 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
            >
              <option value="" disabled selected>Pilih Kategori</option>
              <option value="Elektronik">Elektronik</option>
              <option value="Perkakas">Perkakas</option>
              <option value="Material">Material</option>
            </select>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label for="stock" class="block text-sm font-medium text-gray-700">Stok</label>
              <input
                type="number"
                name="stock"
                id="stock"
                min="0"
                required
                class="mt-1 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 shadow-sm placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                placeholder="Jumlah stok"
              />
            </div>

            <div>
              <label for="price" class="block text-sm font-medium text-gray-700">Harga (Rp)</label>
              <input
                type="number"
                name="price"
                id="price"
                min="0"
                required
                class="mt-1 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 shadow-sm placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                placeholder="Harga satuan"
              />
            </div>
          </div>

          <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea
              name="description"
              id="description"
              rows="3"
              class="mt-1 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 shadow-sm placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
              placeholder="Deskripsi barang (opsional)"
            ></textarea>
          </div>

          <div class="flex justify-end gap-3 pt-4 border-t border-gray-200">
            <button
              type="button"
              onclick="closeModal()"
              class="rounded-lg border border-gray-300 bg-white px-5 py-2 text-sm font-semibold text-gray-700 shadow-sm transition hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1"
            >
              Batal
            </button>
            <button
              type="submit"
              class="rounded-lg bg-blue-600 px-5 py-2 text-sm font-semibold text-white shadow-md transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1"
            >
              Simpan
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- Tabel Barang -->
    <div class="overflow-x-auto rounded-lg bg-white shadow">
      <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" class="whitespace-nowrap px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Nama Barang</th>
            <th scope="col" class="whitespace-nowrap px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Kategori</th>
            <th scope="col" class="whitespace-nowrap px-6 py-3 text-right text-xs font-semibold uppercase tracking-wide text-gray-500">Stok</th>
            <th scope="col" class="whitespace-nowrap px-6 py-3 text-right text-xs font-semibold uppercase tracking-wide text-gray-500">Harga</th>
            <th scope="col" class="whitespace-nowrap px-6 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Aksi</th>
          </tr>
        </thead>
        <tbody id="itemTable" class="divide-y divide-gray-200 bg-white">
          <tr class="hover:bg-gray-50 transition-colors">
            <td class="whitespace-nowrap px-6 py-4 text-gray-900 font-medium">Kamera CCTV 4K</td>
            <td class="whitespace-nowrap px-6 py-4 text-gray-700">Elektronik</td>
            <td class="whitespace-nowrap px-6 py-4 text-right text-gray-900 font-semibold">15</td>
            <td class="whitespace-nowrap px-6 py-4 text-right text-gray-900 font-semibold">Rp 1.500.000</td>
            <td class="whitespace-nowrap px-6 py-4 text-center space-x-3">
              <button
                onclick="openEditModal(this)"
                class="inline-flex items-center justify-center rounded-md p-2 text-blue-600 hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                aria-label="Edit Barang"
                title="Edit Barang"
              >
                <i class="fas fa-edit text-lg"></i>
              </button>
              <button
                onclick="deleteItem(this)"
                class="inline-flex items-center justify-center rounded-md p-2 text-red-600 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-500"
                aria-label="Hapus Barang"
                title="Hapus Barang"
              >
                <i class="fas fa-trash text-lg"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    let currentEditingItem = null;

    function openAddModal() {
      document.getElementById('modalTitle').textContent = 'Tambah Barang Baru';
      const form = document.getElementById('itemForm');
      form.reset();
      currentEditingItem = null;
      document.getElementById('itemModal').classList.remove('hidden');
      // Focus first input
      setTimeout(() => form.elements.name.focus(), 100);
    }

    function openEditModal(button) {
      const row = button.closest('tr');
      const cells = row.getElementsByTagName('td');

      document.getElementById('modalTitle').textContent = 'Edit Barang';
      const form = document.getElementById('itemForm');

      form.elements.name.value = cells[0].textContent.trim();
      form.elements.category.value = cells[1].textContent.trim();
      form.elements.stock.value = cells[2].textContent.trim();
      // Remove non-digit characters for price input
      form.elements.price.value = cells[3].textContent.replace(/\D/g, '').trim();
      form.elements.description.value = row.dataset.description || '';

      currentEditingItem = row;
      document.getElementById('itemModal').classList.remove('hidden');
      setTimeout(() => form.elements.name.focus(), 100);
    }

    function closeModal() {
      document.getElementById('itemModal').classList.add('hidden');
    }

    function handleFormSubmit(event) {
      event.preventDefault();
      const formData = new FormData(event.target);

      const newItem = {
        name: formData.get('name').trim(),
        category: formData.get('category'),
        stock: formData.get('stock'),
        price: 'Rp ' + parseInt(formData.get('price'), 10).toLocaleString('id-ID'),
        description: formData.get('description').trim()
      };

      if (currentEditingItem) {
        // Update existing item
        const cells = currentEditingItem.getElementsByTagName('td');
        cells[0].textContent = newItem.name;
        cells[1].textContent = newItem.category;
        cells[2].textContent = newItem.stock;
        cells[3].textContent = newItem.price;
        currentEditingItem.dataset.description = newItem.description;
      } else {
        // Add new item
        const newRow = document.createElement('tr');
        newRow.classList.add('hover:bg-gray-50', 'transition-colors');
        newRow.dataset.description = newItem.description;
        newRow.innerHTML = `
          <td class="whitespace-nowrap px-6 py-4 text-gray-900 font-medium">${newItem.name}</td>
          <td class="whitespace-nowrap px-6 py-4 text-gray-700">${newItem.category}</td>
          <td class="whitespace-nowrap px-6 py-4 text-right text-gray-900 font-semibold">${newItem.stock}</td>
          <td class="whitespace-nowrap px-6 py-4 text-right text-gray-900 font-semibold">${newItem.price}</td>
          <td class="whitespace-nowrap px-6 py-4 text-center space-x-3">
            <button
              onclick="openEditModal(this)"
              class="inline-flex items-center justify-center rounded-md p-2 text-blue-600 hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
              aria-label="Edit Barang"
              title="Edit Barang"
            >
              <i class="fas fa-edit text-lg"></i>
            </button>
            <button
              onclick="deleteItem(this)"
              class="inline-flex items-center justify-center rounded-md p-2 text-red-600 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-500"
              aria-label="Hapus Barang"
              title="Hapus Barang"
            >
              <i class="fas fa-trash text-lg"></i>
            </button>
          </td>
        `;
        document.getElementById('itemTable').appendChild(newRow);
      }

      closeModal();
    }

    function deleteItem(button) {
      if (confirm('Apakah Anda yakin ingin menghapus barang ini?')) {
        button.closest('tr').remove();
      }
    }

    // Close modal on Escape key press
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && !document.getElementById('itemModal').classList.contains('hidden')) {
        closeModal();
      }
    });

    // Close modal when clicking outside modal content
    document.getElementById('itemModal').addEventListener('click', (e) => {
      if (e.target === e.currentTarget) {
        closeModal();
      }
    });
  </script>
</body>
</html>