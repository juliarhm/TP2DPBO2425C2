from Pelanggan import Pelanggan
from PelangganPremium import PelangganPremium

if __name__ == "__main__":
    # Data awal
    daftar_pelanggan = [
        Pelanggan("11111", "Julia", "Riau", "P001", "081111", "Beli Laptop"),
        Pelanggan("22222", "Putri", "Medan", "P002", "082222", "Beli HP"),
        PelangganPremium("33333", "Firda", "Parongpong", "P003", "083333", "Beli TV", "Platinum", 20, 300),
        PelangganPremium("44444", "Shakila", "Bandung", "P004", "084444", "Beli Kamera", "Emas", 15, 400),
        PelangganPremium("55555", "Farah", "Depok", "P005", "085555", "Beli Kamera", "Perak", 10, 250),
    ]

    def tambah_pelanggan():
        print("\nTambah pelanggan:")
        print("=== JENIS ===")
        print("1. Biasa")
        print("2. Premium")
        jenis = input("Pilih jenis : ")

        noktp = input("No KTP       : ")
        nama = input("Nama         : ")
        alamat = input("Alamat       : ")
        id_pelanggan = input("ID Pelanggan : ")
        telp = input("No. Telepon  : ")
        riwayat = input("Riwayat      : ")

        if jenis == "2":  # Premium
            level = input("Level (Perak/Emas/Platinum): ")
            diskon = int(input("Diskon (%): "))
            point = int(input("Point: "))
            p = PelangganPremium(noktp, nama, alamat, id_pelanggan, telp, riwayat, level, diskon, point)
        else:  # Biasa
            p = Pelanggan(noktp, nama, alamat, id_pelanggan, telp, riwayat)

        daftar_pelanggan.append(p)
        print("Pelanggan berhasil ditambahkan!\n")

    # Tambah data baru (user input)
    tambah_pelanggan()

    # 1. Simpan header + data dalam bentuk list of list
    table = [
        ["No", "Nama", "NoKTP", "Alamat", "ID", "Telepon", "Riwayat", "Level", "Diskon", "Point"]
    ]

    for i, p in enumerate(daftar_pelanggan, start=1):
        if isinstance(p, PelangganPremium):
            row = [
                str(i),
                p.get_nama(),
                p.get_noktp(),
                p.get_alamat(),
                p.get_id_pelanggan(),
                p.get_no_telp(),
                p.get_riwayat(),
                p.get_level(),
                str(p.get_diskon()) + "%",
                str(p.get_point())
            ]
        else:
            row = [
                str(i),
                p.get_nama(),
                p.get_noktp(),
                p.get_alamat(),
                p.get_id_pelanggan(),
                p.get_no_telp(),
                p.get_riwayat(),
                "-",
                "-",
                "-"
            ]
        table.append(row)

    # 2. Hitung lebar maksimum tiap kolom
    col_widths = [max(len(str(row[c])) for row in table) for c in range(len(table[0]))]

    # 3. Fungsi cetak garis pembatas
    def print_separator():
        print("+" + "+".join("-" * (w + 2) for w in col_widths) + "+")

    # 4. Cetak tabel
    print_separator()
    for r, row in enumerate(table):
        print("|" + "|".join(f" {str(row[c]).ljust(col_widths[c])} " for c in range(len(row))) + "|")
        if r == 0:  # garis setelah header
            print_separator()
    print_separator()