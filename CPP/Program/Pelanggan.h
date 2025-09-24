#ifndef PELANGGAN_H
#define PELANGGAN_H

#include "Manusia.h"

class Pelanggan : public Manusia
{
private:
    string idPelanggan;
    string noTelp;
    string riwayat;

public:
    Pelanggan() {}
    Pelanggan(string noktp, string nama, string alamat,
              string idPelanggan, string noTelp, string riwayat)
        : Manusia(noktp, nama, alamat),
          idPelanggan(idPelanggan), noTelp(noTelp), riwayat(riwayat) {}

    string getIdPelanggan() { return idPelanggan; }
    void setIdPelanggan(string id) { idPelanggan = id; }

    string getNoTelp() { return noTelp; }
    void setNoTelp(string t) { noTelp = t; }

    string getRiwayat() { return riwayat; }
    void setRiwayat(string r) { riwayat = r; }

    string getLevel() override { return "-"; }
    string getDiskon() override { return "-"; }
    string getPoint() override { return "-"; }
};

#endif
