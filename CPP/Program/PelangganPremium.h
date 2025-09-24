#ifndef PELANGGAN_PREMIUM_H
#define PELANGGAN_PREMIUM_H

#include "Pelanggan.h"

class PelangganPremium : public Pelanggan
{
private:
    string level;
    int diskon;
    int point;

public:
    PelangganPremium() {}
    PelangganPremium(string noktp, string nama, string alamat, string idPelanggan, string noTelp, string riwayat, string level, int diskon, int point) : 
    Pelanggan(noktp, nama, alamat, idPelanggan, noTelp, riwayat), level(level), diskon(diskon), point(point) {}

    string getLevel() override { return level; }
    string getDiskon() override { return to_string(diskon) + "%"; }
    string getPoint() override { return to_string(point); }
};

#endif