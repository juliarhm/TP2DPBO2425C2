from Manusia import Manusia

class Pelanggan(Manusia):
    def __init__(self, noktp="", nama="", alamat="", id_pelanggan="", no_telp="", riwayat=""):
        super().__init__(noktp, nama, alamat)
        self.__id_pelanggan = id_pelanggan
        self.__no_telp = no_telp
        self.__riwayat = riwayat

    # Getter dan Setter
    def set_id_pelanggan(self, id_pelanggan):
        self.__id_pelanggan = id_pelanggan

    def get_id_pelanggan(self):
        return self.__id_pelanggan

    # Getter dan Setter NoTelp
    def get_no_telp(self):
        return self.__no_telp
    
    def set_no_telp(self, no_telp):
        self.__no_telp = no_telp

    # Getter dan setter RiwayatPesanan
    def get_riwayat(self):
        return self.__riwayat
    
    def set_riwayat(self, riwayat):
        self.__riwayat = riwayat

    # Tampilkan data     
    def tampil_data_pelanggan(self):
        self.tampil_data_manusia()
        print("ID Pelanggan   :", self.get_id_pelanggan())
        print("No. Telepon    :", self.get_no_telp())
        print("Riwayat Pesanan:", self.get_riwayat())