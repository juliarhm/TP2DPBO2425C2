class Manusia:
    def __init__(self, noktp="", nama="", alamat=""):
        self.__noktp = noktp
        self.__nama = nama
        self.__alamat = alamat

    # Getter dan setter NoKTP
    def get_noktp(self):
        return self.__noktp
    
    def set_noktp(self, noktp):
        self.__noktp = noktp

    # Getter dan Setter Nama
    def set_nama(self, nama):
        self.__nama = nama

    def get_nama(self):
        return self.__nama

    # Getter dan setter Alamat
    def set_alamat(self, alamat):
        self.__alamat = alamat

    def get_alamat(self):
        return self.__alamat

    # Method untuk menampilkan data
    def tampil_data_manusia(self):
        print("No KTP   :", self.get_noktp())
        print("Nama     :", self.get_nama())
        print("Alamat   :", self.get_alamat())