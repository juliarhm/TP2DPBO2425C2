from Pelanggan import Pelanggan

class PelangganPremium(Pelanggan):
    def __init__(self, noktp="", nama="", alamat="", id_pelanggan="", no_telp="", riwayat="", level="", diskon=0.0, point=0):
        super().__init__(noktp, nama, alamat, id_pelanggan, no_telp, riwayat)
        self.__level = level
        self.__diskon = diskon
        self.__point = point

    # Setter dan Setter 
    def get_level(self):
        return self.__level
    
    def set_level(self, level):
        self.__level = level

    # Getter dan Setter Diskon
    def get_diskon(self):
        return self.__diskon

    def set_diskon(self, diskon):
        self.__diskon = diskon

    # Getter dan Setter Point
    def get_point(self):
        return self.__point
    
    def set_point(self, point):
        self.__point = point

    # Tampilkan Data
    def tampil_data_premium(self):
        self.tampil_data_pelanggan()
        print("Level   :", self.get_level())
        print("Diskon  :", str(self.get_diskon()) + "%")
        print("Point   :", self.get_point())