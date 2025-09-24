import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        ArrayList<Pelanggan> daftarPelanggan = new ArrayList<>();

        // Data awal
        daftarPelanggan.add(new Pelanggan("11111", "Julia", "Riau", "P001", "081111", "Beli Laptop"));
        daftarPelanggan.add(new Pelanggan("22222", "Putri", "Medan", "P002", "082222", "Beli HP"));
        daftarPelanggan.add(new PelangganPremium("33333", "Firda", "Parongpong", "P003", "083333", "Beli TV", "Platinum", 20.0, 300));
        daftarPelanggan.add(new PelangganPremium("44444", "Shakila", "Bandung", "P004", "084444", "Beli Kamera", "Emas", 15.0, 400));
        daftarPelanggan.add(new PelangganPremium("55555", "Farah", "Depok", "P005", "085555", "Beli Kamera", "Perak", 10, 250));

        tambahPelanggan(daftarPelanggan);

        // Header kolom
        String[] header = {"No","Nama","NoKTP","Alamat","ID","Telepon","Riwayat","Level","Diskon","Point"};

        // Cari panjang max tiap kolom
        int[] colWidth = new int[header.length];
        for (int i = 0; i < header.length; i++) {
            colWidth[i] = header[i].length(); // minimal sepanjang judul
        }

        int index = 1;
        for (Pelanggan p : daftarPelanggan) {
            colWidth[0] = Math.max(colWidth[0], String.valueOf(index).length());
            colWidth[1] = Math.max(colWidth[1], p.getNama().length());
            colWidth[2] = Math.max(colWidth[2], p.getNoktp().length());
            colWidth[3] = Math.max(colWidth[3], p.getAlamat().length());
            colWidth[4] = Math.max(colWidth[4], p.getIdPelanggan().length());
            colWidth[5] = Math.max(colWidth[5], p.getNoTelp().length());
            colWidth[6] = Math.max(colWidth[6], p.getRiwayat().length());

            if (p instanceof PelangganPremium) {
                PelangganPremium pp = (PelangganPremium)p;
                colWidth[7] = Math.max(colWidth[7], pp.getLevel().length());
                colWidth[8] = Math.max(colWidth[8], (pp.getDiskon()+"%").length());
                colWidth[9] = Math.max(colWidth[9], String.valueOf(pp.getPoint()).length());
            } else {
                colWidth[7] = Math.max(colWidth[7], 1); // "-"
                colWidth[8] = Math.max(colWidth[8], 1);
                colWidth[9] = Math.max(colWidth[9], 1);
            }
            index++;
        }

        // Total panjang tabel
        int totalLength = Arrays.stream(colWidth).sum() + header.length*3 + 1;

        // Cetak garis pembatas
        printLine(totalLength);

        // Cetak header
        System.out.print("|");
        for (int i = 0; i < header.length; i++) {
            System.out.printf(" %-" + colWidth[i] + "s |", header[i]);
        }
        System.out.println();
        printLine(totalLength);

        // Cetak isi tabel
        index = 1;
        for (Pelanggan p : daftarPelanggan) {
            System.out.print("| ");
            System.out.printf("%-" + colWidth[0] + "s | ", index++);
            System.out.printf("%-" + colWidth[1] + "s | ", p.getNama());
            System.out.printf("%-" + colWidth[2] + "s | ", p.getNoktp());
            System.out.printf("%-" + colWidth[3] + "s | ", p.getAlamat());
            System.out.printf("%-" + colWidth[4] + "s | ", p.getIdPelanggan());
            System.out.printf("%-" + colWidth[5] + "s | ", p.getNoTelp());
            System.out.printf("%-" + colWidth[6] + "s | ", p.getRiwayat());

            if (p instanceof PelangganPremium) {
                PelangganPremium pp = (PelangganPremium)p;
                System.out.printf("%-" + colWidth[7] + "s | ", pp.getLevel());
                System.out.printf("%-" + colWidth[8] + "s | ", pp.getDiskon()+"%");
                System.out.printf("%-" + colWidth[9] + "s |", pp.getPoint());
            } else {
                System.out.printf("%-" + colWidth[7] + "s | ", "-");
                System.out.printf("%-" + colWidth[8] + "s | ", "-");
                System.out.printf("%-" + colWidth[9] + "s |", "-");
            }
            System.out.println();
        }
        printLine(totalLength);
    }

    public static void printLine(int length) {
        for (int i = 0; i < length; i++) System.out.print("=");
        System.out.println();
    }

    public static void tambahPelanggan(ArrayList<Pelanggan> daftarPelanggan) {
        Scanner sc = new Scanner(System.in);
        System.out.println("\nTambah pelanggan:");
        System.out.println("=== JENIS ===");
        System.out.println("1. Biasa");
        System.out.println("2. Premium");
        System.out.print("Pilih jenis : ");
        String jenis = sc.nextLine();

        System.out.print("No KTP       : ");
        String noktp = sc.nextLine();
        System.out.print("Nama         : ");
        String nama = sc.nextLine();
        System.out.print("Alamat       : ");
        String alamat = sc.nextLine();
        System.out.print("ID Pelanggan : ");
        String id = sc.nextLine();
        System.out.print("No. Telepon  : ");
        String telp = sc.nextLine();
        System.out.print("Riwayat      : ");
        String riwayat = sc.nextLine();

        if (jenis.equals("2")) {
            System.out.print("Level (Perak/Emas/Platinum): ");
            String level = sc.nextLine();
            System.out.print("Diskon (%): ");
            double diskon = Double.parseDouble(sc.nextLine());
            System.out.print("Point: ");
            int point = Integer.parseInt(sc.nextLine());
            daftarPelanggan.add(new PelangganPremium(noktp, nama, alamat, id, telp, riwayat, level, diskon, point));
        } else {
            daftarPelanggan.add(new Pelanggan(noktp, nama, alamat, id, telp, riwayat));
        }

        System.out.println("Pelanggan berhasil ditambahkan!\n");
    }
}