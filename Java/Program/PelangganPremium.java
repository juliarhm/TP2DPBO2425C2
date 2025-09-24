public class PelangganPremium extends Pelanggan {
    private String level;
    private double diskon;
    private int point;

    public PelangganPremium() {}

    public PelangganPremium(String noktp, String nama, String alamat, String idPelanggan, String noTelp, String riwayat, String level, double diskon, int point) {
        super(noktp, nama, alamat, idPelanggan, noTelp, riwayat);
        this.level = level;
        this.diskon = diskon;
        this.point = point;
    }

    public String getLevel() {
        return level;
    }

    public void setLevel(String level) {
        this.level = level;
    }

    public double getDiskon() {
        return diskon;
    }

    public void setDiskon(double diskon) {
        this.diskon = diskon;
    }

    public int getPoint() {
        return point;
    }

    public void setPoint(int point) {
        this.point = point;
    }

    public void tampilDataPremium() {
        tampilDataPelanggan();
        System.out.println("Level   : " + getLevel());
        System.out.println("Diskon  : " + getDiskon() + "%");
        System.out.println("Point   : " + getPoint());
    }
}