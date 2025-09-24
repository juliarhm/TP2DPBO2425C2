#include <iostream>
#include <iomanip>
#include <vector>
#include <string>
#include "PelangganPremium.h"
using namespace std;

void tambahPelanggan(vector<Manusia *> &daftar)
{
    cout << "Tambah pelanggan:\n";
    cout << "=== JENIS ===\n";
    cout << "1. Biasa\n";
    cout << "2. Premium\n";
    cout << "Pilih jenis : ";
    string jenis;
    getline(cin, jenis);

    string noktp, nama, alamat, id, telp, riwayat;
    cout << "No KTP       : ";
    getline(cin, noktp);
    cout << "Nama         : ";
    getline(cin, nama);
    cout << "Alamat       : ";
    getline(cin, alamat);
    cout << "ID Pelanggan : ";
    getline(cin, id);
    cout << "No. Telepon  : ";
    getline(cin, telp);
    cout << "Riwayat      : ";
    getline(cin, riwayat);

    if (jenis == "2")
    {
        string level;
        int diskon;
        int point;
        cout << "Level (Perak/Emas/Platinum): ";
        getline(cin, level);
        cout << "Diskon (%): ";
        cin >> diskon;
        cout << "Point      : ";
        cin >> point;
        cin.ignore(); // buang newline
        daftar.push_back(new PelangganPremium(noktp, nama, alamat, id, telp, riwayat, level, diskon, point));
    }
    else
    {
        daftar.push_back(new Pelanggan(noktp, nama, alamat, id, telp, riwayat));
    }

    cout << "Pelanggan berhasil ditambahkan!\n\n";
}

int main()
{
    vector<Manusia *> daftar;

    // Data awal
    daftar.push_back(new Pelanggan("11111", "Julia", "Riau", "P001", "081111", "Beli Laptop"));
    daftar.push_back(new Pelanggan("22222", "Putri", "Medan", "P002", "082222", "Beli HP"));
    daftar.push_back(new PelangganPremium("33333", "Firda", "Parongpong", "P003", "083333", "Beli TV", "Platinum", 20, 300));
    daftar.push_back(new PelangganPremium("44444", "Shakila", "Bandung", "P004", "084444", "Beli Kamera", "Emas", 15, 400));
    daftar.push_back(new PelangganPremium("55555", "Farah", "Depok", "P005", "085555", "Beli Kamera", "Perak", 10, 250));

    tambahPelanggan(daftar);

    // 1. Simpan ke vector<vector<string>>
    vector<vector<string>> table;

    // Header
    table.push_back({"No", "Nama", "NoKTP", "Alamat", "ID", "Telepon", "Riwayat", "Level", "Diskon", "Point"});

    int i = 1;
    for (auto p : daftar)
    {
        Pelanggan *pl = dynamic_cast<Pelanggan *>(p);
        if (pl)
        {
            table.push_back({to_string(i++), pl->getNama(), pl->getNoktp(), pl->getAlamat(), pl->getIdPelanggan(), pl->getNoTelp(), pl->getRiwayat(), pl->getLevel(), pl->getDiskon(), pl->getPoint()});
        }
    }

    // 2. Hitung lebar maksimum tiap kolom
    int cols = table[0].size();
    vector<size_t> maxWidth(cols, 0);

    for (int c = 0; c < cols; c++)
    {
        for (int r = 0; r < table.size(); r++)
        {
            maxWidth[c] = max(maxWidth[c], table[r][c].size());
        }
    }

    // Fungsi cetak garis pemisah
    auto printSeparator = [&](char left, char mid, char right)
    {
        cout << left;
        for (int c = 0; c < cols; c++)
        {
            cout << string(maxWidth[c] + 2, '-') << (c == cols - 1 ? right : mid);
        }
        cout << endl;
    };

    // 3. Cetak tabel dengan garis
    printSeparator('+', '+', '+');
    for (int r = 0; r < table.size(); r++)
    {
        cout << "|";
        for (int c = 0; c < cols; c++)
        {
            cout << " " << left << setw(maxWidth[c]) << table[r][c] << " |";
        }
        cout << endl;

        if (r == 0)
        { // garis setelah header
            printSeparator('+', '+', '+');
        }
    }
    printSeparator('+', '+', '+');

    // 4. Bersihkan memory
    for (auto p : daftar)
        delete p;

    return 0;
}
