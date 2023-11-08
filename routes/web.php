<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('menu');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('menu');
    })->name('menu');
});

Route::get('/computador', function(){
    return view('computador');
});

Route::get('/portatil', function(){
    return view('portatil');
});

Route::get('/monitor', function(){
    return view('monitor');
});

Route::get('/teclado', function(){
    return view('teclado');
});

Route::get('/componente', function(){
    return view('componente');
});

Route::get('/rato', function(){
    return view('rato');
});

Route::get('/amd', function(){
    return view('amd');
});

Route::get('/intel', function(){
    return view('intel');
});

Route::get('/apple', function(){
    return view('apple');
});

Route::get('/asus', function(){
    return view('asus');
});

Route::get('/hp', function(){
    return view('hp');
});

Route::get('/lenovo', function(){
    return view('lenovo');
});

Route::get('/acer', function(){
    return view('acer');
});

Route::get('/dell', function(){
    return view('dell');
});

Route::get('/msi', function(){
    return view('msi');
});

Route::get('/corsair', function(){
    return view('corsair');
});

Route::get('/gigabyte', function(){
    return view('gigabyte');
});

Route::get('/logitech', function(){
    return view('logitech');
});

Route::get('/razer', function(){
    return view('razer');
});

Route::get('/hyper-x', function(){
    return view('hyper-x');
});

Route::get('/kingston', function(){
    return view('kingston');
});

Route::get('/perfil', function(){
    return view('perfl');
});

Route::get('/HP-Victus', function(){
    return view('produto.HP-Victus');
});

Route::get('/acer-veriton-vx2680g', function(){
    return view('produto.acer-veriton-vx2680g');
});

Route::get('/dell-latitude', function(){
    return view('produto.dell-latitude');
});

Route::get('/ideapad-gaming3', function(){
    return view('produto.ideapad-gaming3');
});

Route::get('/lenovo-legion-t5', function(){
    return view('produto.lenovo-legion-t5');
});

Route::get('/macbook-air', function(){
    return view('produto.macbook-air');
});

Route::get('/kingston-16gb-ram', function(){
    return view('produto.kingston-16gb-ram');
});

Route::get('/msi-mag-codex', function(){
    return view('produto.msi-mag-codex');
});

Route::get('/msi-modern14', function(){
    return view('produto.msi-modern14');
});

Route::get('/pc-asus-rog', function(){
    return view('produto.pc-asus-rog');
});

Route::get('/rtx3060', function(){
    return view('produto.rtx3060');
});

Route::get('/ryzen7', function(){
    return view('produto.ryzen7');
});

Route::get('/hp-omen', function(){
    return view('produto.hp-omen');
});

Route::get('/pc-acer-nitro', function(){
    return view('produto.pc-acer-nitro');
});

Route::get('/asus-s500mc', function(){
    return view('produto.asus-s500mc');
});

Route::get('/hp-slim', function(){
    return view('produto.hp-slim');
});

Route::get('/hp-pavilion', function(){
    return view('produto.hp-pavilion');
});

Route::get('/msi-mpg-tident', function(){
    return view('produto.msi-mpg-tident');
});

Route::get('/gigabyte-aorus-ms', function(){
    return view('produto.gigabyte-aorus-ms');
});

Route::get('/macbook-pro', function(){
    return view('produto.macbook-pro');
});

Route::get('/gigabyte-g7', function(){
    return view('produto.gigabyte-g7');
});

Route::get('/lenovo-ideapad1', function(){
    return view('produto.lenovo-ideapad1');
});

Route::get('/lenovo-legion5', function(){
    return view('produto.lenovo-legion5');
});

Route::get('/gigabyte-aorus5', function(){
    return view('produto.gigabyte-aorus5');
});

Route::get('/gigabyte-aorus-rog', function(){
    return view('produto.gigabyte-aorus-rog');
});

Route::get('/dell-vostro', function(){
    return view('produto.dell-vostro');
});

Route::get('/gigabyte-aero', function(){
    return view('produto.gigabyte-aero');
});

Route::get('/corsair-hx1500i', function(){
    return view('produto.corsair-hx1500i');
});

Route::get('/intel-i7', function(){
    return view('produto.intel-i7');
});

Route::get('/corsair-icue', function(){
    return view('produto.corsair-icue');
});

Route::get('/asus-motherboard', function(){
    return view('produto.asus-motherboard');
});

Route::get('/rtx4090', function(){
    return view('produto.rtx4090');
});

Route::get('/kingston-240gb-ssd', function(){
    return view('produto.kingston-240gb-ssd');
});

Route::get('/amd-ryzen5', function(){
    return view('produto.amd-ryzen5');
});

Route::get('/kingston-hyperx-32gb', function(){
    return view('produto.kingston-hyperx-32gb');
});

Route::get('/corsair-rm850', function(){
    return view('produto.corsair-rm850');
});

Route::get('/intel-i9', function(){
    return view('produto.intel-i9');
});

Route::get('/msi-mag-forge', function(){
    return view('produto.msi-mag-forge');
});

Route::get('/gigabyte-motherboard', function(){
    return view('produto.gigabyte-motherboard');
});

Route::get('/kingston-480gb-ssd', function(){
    return view('produto.kingston-480gb-ssd');
});

Route::get('/dell-monitor32', function(){
    return view('produto.dell-monitor32');
});

Route::get('/asus-monitor-portable', function(){
    return view('produto.asus-monitor-portable');
});

Route::get('/asus-monitor24', function(){
    return view('produto.asus-monitor24');
});

Route::get('/asus-monitor27', function(){
    return view('produto.asus-monitor27');
});

Route::get('/gigabyte-monitor-aorus', function(){
    return view('produto.gigabyte-monitor-aorus');
});

Route::get('/gigabyte-monitor31', function(){
    return view('produto.gigabyte-monitor31');
});

Route::get('/acer-monitor', function(){
    return view('produto.acer-monitor');
});

Route::get('/lenovo-monitor27', function(){
    return view('produto.lenovo-monitor27');
});

Route::get('/lenovo-monitor23', function(){
    return view('produto.lenovo-monitor23');
});

Route::get('/hp-monitor', function(){
    return view('produto.hp-monitor');
});

Route::get('/msi-monitor', function(){
    return view('produto.msi-monitor');
});

Route::get('/apple-teclado', function(){
    return view('produto.apple-teclado');
});

Route::get('/hp-teclado', function(){
    return view('produto.hp-teclado');
});

Route::get('/razer-blackwidow-v3', function(){
    return view('produto.razer-blackwidow-v3');
});

Route::get('/razer-ornata-v3', function(){
    return view('produto.razer-ornata-v3');
});

Route::get('/razer-huntsman', function(){
    return view('produto.razer-huntsman');
});

Route::get('/hyperx-alloy', function(){
    return view('produto.hyperx-alloy');
});

Route::get('/hyperx-alloy-origins', function(){
    return view('produto.hyperx-alloy-origins');
});

Route::get('/logitech-teclado-g413', function(){
    return view('produto.logitech-teclado-g413');
});

Route::get('/logitech-teclado-mx', function(){
    return view('produto.logitech-teclado-mx');
});

Route::get('/lenovo-teclado', function(){
    return view('produto.lenovo-teclado');
});

Route::get('/corsair-teclado-k60', function(){
    return view('produto.corsair-teclado-k60');
});

Route::get('/corsair-teclado-l55', function(){
    return view('produto.corsair-teclado-l55');
});

Route::get('/razer-rato-essential', function(){
    return view('produto.');
});

Route::get('/razer-rato-deathadder-v3', function(){
    return view('produto.razer-rato-deathadder-v3');
});

Route::get('/hyperx-rato-pulsefire', function(){
    return view('produto.hyperx-rato-pulsefire');
});

Route::get('/hyperx-rato-haste', function(){
    return view('produto.hyperx-rato-haste');
});

Route::get('/logitech-rato-m190', function(){
    return view('produto.logitech-rato-m190');
});

Route::get('/logitech-rato-g502', function(){
    return view('produto.logitech-rato-g502');
});

Route::get('/logitech-rato-m90', function(){
    return view('produto.logitech-rato-m90');
});

Route::get('/logitech-rato-gpro', function(){
    return view('produto.logitech-rato-gpro');
});

Route::get('/hp-teclado', function(){
    return view('produto.hp-teclado');
});

// Geekme livros------------------------------------------------------------------------------------------------------------------------------

Route::get('/a_casa_assombrada', function(){
    return view('livro.a_casa_assombrada');
});

Route::get('/como_eu_era_antes_de_voce', function(){
    return view('livro.como_eu_era_antes_de_voce');
});

Route::get('/vermelho_branco_e_sangue_azul', function(){
    return view('livro.vermelho_branco_e_sangue_azul');
});

Route::get('/depois_de_voce', function(){
    return view('livro.depois_de_voce');
});

Route::get('/continencia_ao_amor', function(){
    return view('livro.continencia_ao_amor');
});

Route::get('/a_cabana', function(){
    return view('livro.a_cabana');
});

Route::get('/Assasinato_no_expresso_do_oriente', function(){
    return view('livro.Assasinato_no_expresso_do_oriente');
});

Route::get('/a_travessia', function(){
    return view('livro.a_travessia');
});

Route::get('/e_nao_sobrou_nenhum', function(){
    return view('livro.e_nao_sobrou_nenhum');
});

Route::get('/as_tiras_classicas_da_turma_da_monica', function(){
    return view('livro.as_tiras_classicas_da_turma_da_monica');
});

Route::get('/turma_da_monica_folclore_brasileiro', function(){
    return view('livro.turma_da_monica_folclore_brasileiro');
});

Route::get('/diario_de_um_banana', function(){
    return view('livro.diario_de_um_banana');
});

Route::get('/diario_de_banana_rodrik_e_cara', function(){
    return view('livro.diario_de_banana_rodrik_e_cara');
});

Route::get('/a_culpa_e_das_estrelas', function(){
    return view('livro.a_culpa_e_das_estrelas');
});

Route::get('/cidades_de_papel', function(){
    return view('livro.cidades_de_papel');
});

Route::get('/o_menino_do_pijama_listrado', function(){
    return view('livro.o_menino_do_pijama_listrado');
});

Route::get('/Turtles_all_the_way_down', function(){
    return view('livro.Turtles_all_the_way_down');
});

Route::get('/o_sol_e_para_todos', function(){
    return view('livro.o_sol_e_para_todos');
});

Route::get('/animais_fantasticos', function(){
    return view('livro.animais_fantasticos');
});

Route::get('/harry_poter_p_f', function(){
    return view('livro.harry_poter_p_f');
});

Route::get('/os_diarios_do_semideus', function(){
    return view('livro.os_diarios_do_semideus');
});

Route::get('/o_sol_e_a_estrela', function(){
    return view('livro.o_sol_e_a_estrela');
});

Route::get('/a_espera_de_um_milagre', function(){
    return view('livro.a_espera_de_um_milagre');
});

Route::get('/it_a_coisa', function(){
    return view('livro.it_a_coisa');
});

Route::get('/o_instituto', function(){
    return view('livro.o_instituto');
});

Route::get('/troubled_blood', function(){
    return view('livro.troubled_blood');
});

Route::get('/tripulacao_esqueleto', function(){
    return view('livro.tripulacao_esqueleto');
});


Route::get('/diario_de_um_banana_3', function(){
    return view('livro.diario_de_um_banana_3');
});

Route::get('/diario_de_um_banana_4', function(){
    return view('livro.diario_de_um_banana_4');
});

Route::get('/diario_de_um_banana_5', function(){
    return view('livro.diario_de_um_banana_5');
});

Route::get('/diario_de_um_banana_6', function(){
    return view('livro.diario_de_um_banana_6');
});

Route::get('/Percy_Jackson_o_Ladrao_de_Raios', function(){
    return view('livro.Percy_Jackson_o_Ladrao_de_Raios');
});

Route::get('/o_assasinato_de_roger_ackroyd', function(){
    return view('livro.o_assasinato_de_roger_ackroyd');
});

Route::get('/turma_da_monica_lendas_para_criancas', function(){
    return view('livro.turma_da_monica_lendas_para_criancas');
});

Route::get('/uma_historia_de_solidao', function(){
    return view('livro.uma_historia_de_solidao');
});

Route::get('/eu_beijei_shara_wheeler', function(){
    return view('livro.eu_beijei_shara_wheeler');
});


// categorias------------------------------------------------------------------------------------------------------------------------------

Route::get('/Romance', function(){
    return view('(1)Categorias.Romance');
});

Route::get('/Misterio', function(){
    return view('(1)Categorias.Misterio');
});

Route::get('/Ficcao_cientifica', function(){
    return view('(1)Categorias.Ficcao_cientifica');
});

Route::get('/Drama', function(){
    return view('(1)Categorias.Drama');
});

Route::get('/Terror', function(){
    return view('(1)Categorias.Terror');
});

Route::get('/Aventura', function(){
    return view('(1)Categorias.Aventura');
});

// Autores------------------------------------------------------------------------------------------------------------------------------

Route::get('/mike_chen', function(){
    return view('(2)Autores.mike_chen');
});

Route::get('/jk_rowling', function(){
    return view('(2)Autores.jk_rowling');
});

Route::get('/stephen_king', function(){
    return view('(2)Autores.stephen_king');
});

Route::get('/jeff_kinney', function(){
    return view('(2)Autores.jeff_kinney');
});

Route::get('/rick_riordan', function(){
    return view('(2)Autores.rick_riordan');
});

Route::get('/agatha_christie', function(){
    return view('(2)Autores.agatha_christie');
});

Route::get('/john_green', function(){
    return view('(2)Autores.john_green');
});

Route::get('/jojo_moyes', function(){
    return view('(2)Autores.jojo_moyes');
});

Route::get('/william_p_young', function(){
    return view('(2)Autores.william_p_young');
});

Route::get('/mauricio_de_sousa', function(){
    return view('(2)Autores.mauricio_de_sousa');
});

Route::get('/john_boyne', function(){
    return view('(2)Autores.john_boyne');
});

Route::get('/casey_mcquiston', function(){
    return view('(2)Autores.casey_mcquiston');
});

Route::get('/harper_lee', function(){
    return view('(2)Autores.harper_lee');
});

// Páginas ------------------------------------------------------------------------------------------------------------------------------

Route::get('/sobre_nos', function(){
    return view('sobre_nos');
});

Route::get('/contato', function(){
    return view('contato');
});

Route::get('/receber', function(){
    return view('receber');
});


// Editoras------------------------------------------------------------------------------------------------------------------------------

Route::get('/arqueiro', function(){
    return view('(3)Editoras.arqueiro');
});

Route::get('/companhia_das_letras', function(){
    return view('(3)Editoras.companhia_das_letras');
});

Route::get('/globo_livros', function(){
    return view('(3)Editoras.globo_livros');
});

Route::get('/harper_collins', function(){
    return view('(3)Editoras.harper_collins');
});

Route::get('/idw', function(){
    return view('(3)Editoras.idw');
});

Route::get('/Intrinseca', function(){
    return view('(3)Editoras.Intrinseca');
});

Route::get('/panini', function(){
    return view('(3)Editoras.panini');
});

Route::get('/penguin_books', function(){
    return view('(3)Editoras.penguin_books');
});

Route::get('/rocco', function(){
    return view('(3)Editoras.rocco');
});

Route::get('/seguinte', function(){
    return view('(3)Editoras.seguinte');
});

Route::get('/suma', function(){
    return view('(3)Editoras.suma');
});

Route::get('/universo_geek', function(){
    return view('(3)Editoras.universo_geek');
});

Route::get('/vr_editora', function(){
    return view('(3)Editoras.vr_editora');
});


















Route::get('/dicas', function(){
    return view('dicas');
})->middleware('auth');

Route::get('/dicas-computadores', function(){
    return view('dicas-computadores');
})->middleware('auth');

Route::get('/dicas-portateis', function(){
    return view('dicas-portateis');
})->middleware('auth');

Route::get('/dicas-ratos', function(){
    return view('dicas-ratos');
})->middleware('auth');

Route::get('/dicas-processadores', function(){
    return view('dicas-processadores');
})->middleware('auth');

Route::get('/dicas-placa-grafica', function(){
    return view('dicas-placa-grafica');
})->middleware('auth');

Route::get('/dicas-ram', function(){
    return view('dicas-ram');
})->middleware('auth');

Route::get('/dicas-motherboard', function(){
    return view('dicas-motherboard');
})->middleware('auth');

Route::get('/dicas-hd-ssd', function(){
    return view('dicas-hd-ssd');
})->middleware('auth');

Route::get('/dicas-fonte', function(){
    return view('dicas-fonte');
})->middleware('auth');

Route::get('/dicas-armazenamento', function(){
    return view('dicas-armazenamento');
})->middleware('auth');