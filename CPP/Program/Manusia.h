#ifndef MANUSIA_H
#define MANUSIA_H

#include <iostream>
#include <string>
using namespace std;

class Manusia {
private:
    string noktp;
    string nama;
    string alamat;
public:
    Manusia() {}
    Manusia(string noktp, string nama, string alamat)
        : noktp(noktp), nama(nama), alamat(alamat) {}

    string getNoktp() { return noktp; }
    void setNoktp(string n) { noktp = n; }

    string getNama() { return nama; }
    void setNama(string n) { nama = n; }

    string getAlamat() { return alamat; }
    void setAlamat(string a) { alamat = a; }

    virtual void tampilData() {
        cout << "No KTP   : " << noktp << endl;
        cout << "Nama     : " << nama << endl;
        cout << "Alamat   : " << alamat << endl;
    }

    virtual string getLevel() { return "-"; }
    virtual string getDiskon() { return "-"; }
    virtual string getPoint() { return "-"; }

    virtual ~Manusia() {}
};

#endif
