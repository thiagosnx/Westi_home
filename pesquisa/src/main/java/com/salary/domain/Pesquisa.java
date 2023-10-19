package com.salary.domain;

import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;

import java.math.BigDecimal;
import java.time.LocalDateTime;

@Entity(name = "salary")
@Table(name = "salary")
@Getter
@Setter
@NoArgsConstructor
@AllArgsConstructor

public class Pesquisa {
    @Id @GeneratedValue(strategy = GenerationType.UUID)
    private String id;

    private String email;

    private String empresa;

    private String cargo;

    private String obs;

    private String salario;

    private String moeda;

    private LocalDateTime date_time;
}
