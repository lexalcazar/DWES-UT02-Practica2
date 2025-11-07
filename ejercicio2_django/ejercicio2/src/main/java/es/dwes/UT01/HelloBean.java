package es.dwes.UT01;

import java.io.Serializable;
import java.util.Arrays;
import java.util.LinkedHashMap;
import java.util.List;
import java.util.Map;

import jakarta.annotation.PostConstruct;
import jakarta.enterprise.context.RequestScoped;
import jakarta.inject.Named;

@Named("helloBean")
@RequestScoped
public class HelloBean implements Serializable {

    private static final long serialVersionUID = 1L;

    // ---- Clase Usuario
    public static class Usuario {
        private String nombre;
        private String apellidos;
        private String dni;
        private String email;
        private int edad;
        private Map<String, Double> pagos; // mes -> importe (o null)

        public Usuario(String nombre, String apellidos, String dni, String email, int edad, Map<String, Double> pagos) {
            this.nombre = nombre;
            this.apellidos = apellidos;
            this.dni = dni;
            this.email = email;
            this.edad = edad;
            this.pagos = pagos;
        }

        public String getNombre()     { return nombre; }
        public String getApellidos()  { return apellidos; }
        public String getDni()        { return dni; }
        public String getEmail()      { return email; }
        public int getEdad()          { return edad; }
        public Map<String, Double> getPagos() { return pagos; }

        public double getTotalAnual() {
            double total = 0.0;
            if (pagos != null) {
                for (Double v : pagos.values()) if (v != null) total += v;
            }
            return total;
        }
    }

    // ---- Datos expuestos
    private Usuario[] myArray;
    private final List<String> meses = Arrays.asList(
        "Enero","Febrero","Marzo","Abril","Mayo","Junio",
        "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"
    );

    // ESTE GETTER ES EL QUE USA index.xhtml → #{helloBean.usuarios}
    public Usuario[] getUsuarios() {
        return myArray;
    }

    public List<String> getMeses() {
        return meses;
    }

    @PostConstruct
    public void init() {
        myArray = new Usuario[2];

        Map<String, Double> pagosJuan = crearPagosVacios();
        pagosJuan.put("Enero", 20.0);
        pagosJuan.put("Febrero", null);
        pagosJuan.put("Marzo", 15.0);
        pagosJuan.put("Abril", 15.0);
        pagosJuan.put("Mayo", 15.0);
        pagosJuan.put("Junio", 15.0);
        pagosJuan.put("Julio", null);
        pagosJuan.put("Agosto", 15.0);
        pagosJuan.put("Septiembre", 15.0);
        pagosJuan.put("Octubre", 15.0);
        pagosJuan.put("Noviembre", 15.0);
        pagosJuan.put("Diciembre", 15.0);

        myArray[0] = new Usuario("Juan", "Pérez", "12345678A", "juan@mail.com", 30, pagosJuan);

        Map<String, Double> pagosAna = crearPagosVacios();
        pagosAna.put("Enero", 20.0);
        pagosAna.put("Febrero", null);
        pagosAna.put("Marzo", 15.0);
        pagosAna.put("Abril", 15.0);
        pagosAna.put("Mayo", 15.0);
        pagosAna.put("Junio", 15.0);
        pagosAna.put("Julio", 15.0);
        pagosAna.put("Agosto", 15.0);
        pagosAna.put("Septiembre", 15.0);
        pagosAna.put("Octubre", 15.0);
        pagosAna.put("Noviembre", 15.0);
        pagosAna.put("Diciembre", 15.0);

        myArray[1] = new Usuario("Ana", "Sánchez", "12345678Z", "ana@mail.com", 20, pagosAna);
    }

    // Mapa con todos los meses a null (para mantener orden y que salgan todos)
    private Map<String, Double> crearPagosVacios() {
        Map<String, Double> m = new LinkedHashMap<>();
        for (String mes : meses) m.put(mes, null);
        return m;
    }
}
