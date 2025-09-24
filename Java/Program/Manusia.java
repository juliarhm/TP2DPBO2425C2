public class Manusia {
    private String noktp;
    private String nama;
    private String alamat;

    public Manusia() {}

    public Manusia(String noktp, String nama, String alamat) {
        this.noktp = noktp;
        this.nama = nama;
        this.alamat = alamat;
    }

    public String getNoktp() {
        return noktp;
    }

    public void setNoktp(String noktp) {
        this.noktp = noktp;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public String getAlamat() {
        return alamat;
    }

    public void setAlamat(String alamat) {
        this.alamat = alamat;
    }

    public void tampilDataManusia() {
        System.out.println("No KTP   : " + getNoktp());
        System.out.println("Nama     : " + getNama());
        System.out.println("Alamat   : " + getAlamat());
    }
}