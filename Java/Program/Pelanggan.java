public class Pelanggan extends Manusia {
    private String idPelanggan;
    private String noTelp;
    private String riwayat;

    public Pelanggan() {}

    public Pelanggan(String noktp, String nama, String alamat,
                     String idPelanggan, String noTelp, String riwayat) {
        super(noktp, nama, alamat);
        this.idPelanggan = idPelanggan;
        this.noTelp = noTelp;
        this.riwayat = riwayat;
    }

    public String getIdPelanggan() {
        return idPelanggan;
    }

    public void setIdPelanggan(String idPelanggan) {
        this.idPelanggan = idPelanggan;
    }

    public String getNoTelp() {
        return noTelp;
    }

    public void setNoTelp(String noTelp) {
        this.noTelp = noTelp;
    }

    public String getRiwayat() {
        return riwayat;
    }

    public void setRiwayat(String riwayat) {
        this.riwayat = riwayat;
    }

    public void tampilDataPelanggan() {
        tampilDataManusia();
        System.out.println("ID Pelanggan   : " + getIdPelanggan());
        System.out.println("No. Telepon    : " + getNoTelp());
        System.out.println("Riwayat Pesanan: " + getRiwayat());
    }
}