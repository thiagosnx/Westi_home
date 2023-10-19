package com.salary.controllers;

import com.salary.domain.Pesquisa;
import com.salary.repository.PesquisaRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.ModelAndView;

@Controller
//@RequestMapping("/pesquisa")
public class PesquisaController {

    @Autowired
    PesquisaRepository repository;

    @GetMapping("/")
    public String listaSalarios(Model model) {
        model.addAttribute("salarios", repository.findAll());
        return "pesquisa/index";
    }

    @GetMapping("/register")
    public ModelAndView cadastrar(){
        ModelAndView mv = new ModelAndView();
        mv.addObject("salary", new Pesquisa());
        mv.setViewName("pesquisa/form");
        return mv;
    }

    @PostMapping("saveSalary")
    public ModelAndView cadastrar(Pesquisa salary){
        ModelAndView mv = new ModelAndView();
        repository.save(salary);
        mv.setViewName("redirect:/");
        return mv;
    }

}
