<?php include("conexao.php"); ?>
<?php include("header.php"); ?>

<!-- HERO -->
<div class="hero">
  <svg class="hero-sparkle" style="top:20px;left:48%" width="16" height="16" viewBox="0 0 16 16"><path d="M8 0 L9 7 L16 8 L9 9 L8 16 L7 9 L0 8 L7 7 Z" fill="#ffd86b" opacity="0.7"/></svg>
  <svg class="hero-sparkle" style="top:60px;right:200px" width="10" height="10" viewBox="0 0 16 16"><path d="M8 0 L9 7 L16 8 L9 9 L8 16 L7 9 L0 8 L7 7 Z" fill="#c9b0f0" opacity="0.6"/></svg>
  <svg class="hero-sparkle" style="bottom:30px;left:44%" width="12" height="12" viewBox="0 0 16 16"><path d="M8 0 L9 7 L16 8 L9 9 L8 16 L7 9 L0 8 L7 7 Z" fill="#e8919e" opacity="0.5"/></svg>

  <div class="hero-text">
    <div class="hero-eyebrow">Bem-vindo ao</div>
    <h2>PokeCard<br/><em>Haven!</em></h2>
    <p>Troque, colecione e encontre as cartas Pokémon mais fofas e raras!</p>
    <a href="#" class="btn-primary">
      Explorar Coleção
      <svg width="14" height="14" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0 L9 7 L16 8 L9 9 L8 16 L7 9 L0 8 L7 7 Z"/></svg>
    </a>
  </div>
</div>

<main>

  <!-- CATEGORIAS -->
  <h3 class="titulo-secao">
    <svg width="12" height="12" viewBox="0 0 16 16" fill="#e8919e"><path d="M8 0 L9 7 L16 8 L9 9 L8 16 L7 9 L0 8 L7 7 Z"/></svg>
    Navegue por categorias
    <svg width="12" height="12" viewBox="0 0 16 16" fill="#e8919e"><path d="M8 0 L9 7 L16 8 L9 9 L8 16 L7 9 L0 8 L7 7 Z"/></svg>
  </h3>
  <div class="section-box">
    <div class="cat-grid">
      <a href="#" class="cat-btn">
        <svg class="cat-icon" viewBox="0 0 36 36" fill="none"><circle cx="18" cy="18" r="14" fill="#ffd6e7"/><path d="M18 10 C22 10 26 14 26 18 C26 22 22 26 18 26 C14 26 10 22 10 18" stroke="#e8919e" stroke-width="2" stroke-linecap="round"/><circle cx="18" cy="18" r="4" fill="white" stroke="#e8919e" stroke-width="1.5"/></svg>
        <strong>Cute Cards</strong><small>Cartas super fofas!</small>
      </a>
      <a href="#" class="cat-btn">
        <svg class="cat-icon" viewBox="0 0 36 36" fill="none"><polygon points="18,3 21,13 32,13 23,20 27,31 18,24 9,31 13,20 4,13 15,13" fill="#fff3c4" stroke="#ffd86b" stroke-width="1.5"/></svg>
        <strong>Ultra Raras</strong><small>Cartas raras e especiais!</small>
      </a>
      <a href="#" class="cat-btn">
        <svg class="cat-icon" viewBox="0 0 36 36" fill="none"><rect x="6" y="8" width="24" height="22" rx="3" fill="#e8daff" stroke="#c9b0f0" stroke-width="1.5"/><rect x="10" y="12" width="16" height="10" rx="1.5" fill="#f5eeff"/><line x1="10" y1="26" x2="26" y2="26" stroke="#c9b0f0" stroke-width="1.5"/><rect x="13" y="4" width="10" height="6" rx="2" fill="#c9b0f0"/></svg>
        <strong>Boosters</strong><small>Encontre seus boosters!</small>
      </a>
      <a href="#" class="cat-btn">
        <svg class="cat-icon" viewBox="0 0 36 36" fill="none"><rect x="5" y="10" width="18" height="22" rx="3" fill="#d6f5ee" stroke="#a8e6d8" stroke-width="1.5"/><rect x="9" y="6" width="18" height="22" rx="3" fill="#eafaf6" stroke="#a8e6d8" stroke-width="1.5"/><line x1="13" y1="14" x2="23" y2="14" stroke="#a8e6d8" stroke-width="1.5"/><line x1="13" y1="18" x2="21" y2="18" stroke="#a8e6d8" stroke-width="1"/></svg>
        <strong>Coleções</strong><small>Organizadas por coleção!</small>
      </a>
      <a href="#" class="cat-btn">
        <svg class="cat-icon" viewBox="0 0 36 36" fill="none"><rect x="6" y="10" width="24" height="18" rx="3" fill="#fff3c4" stroke="#ffd86b" stroke-width="1.5"/><rect x="4" y="14" width="4" height="2" rx="1" fill="#ffd86b"/><rect x="28" y="14" width="4" height="2" rx="1" fill="#ffd86b"/><circle cx="18" cy="19" r="4" fill="white" stroke="#ffd86b" stroke-width="1.5"/></svg>
        <strong>Acessórios</strong><small>Sleeves, pastas e mais!</small>
      </a>
      <a href="#" class="cat-btn">
        <svg class="cat-icon" viewBox="0 0 36 36" fill="none"><circle cx="18" cy="18" r="12" fill="#ffd6e7" stroke="#e8919e" stroke-width="1.5"/><line x1="18" y1="10" x2="18" y2="18" stroke="#e8919e" stroke-width="2" stroke-linecap="round"/><line x1="18" y1="18" x2="23" y2="18" stroke="#e8919e" stroke-width="2" stroke-linecap="round"/><circle cx="18" cy="10" r="2" fill="#e8919e"/></svg>
        <strong>Novidades</strong><small>Lançamentos e promoções!</small>
      </a>
    </div>
  </div>

  <!-- CARTAS EM DESTAQUE + CARTA DA SEMANA -->
  <div class="destaques-layout">

    <div>
      <div class="section-head">
        <h3 class="titulo-secao" style="margin-bottom:0">Cartas em destaque</h3>
        <a href="#" class="ver-link">Ver todas →</a>
      </div>
      <div class="section-box" style="margin-bottom:0">
        <div class="cards-scroll">
          <?php
          $sql = "SELECT * FROM cartas WHERE destaque = 1";
          $resultado = mysqli_query($conexao, $sql);
          while($carta = mysqli_fetch_assoc($resultado)) {
            $badge_class = 'badge-comum';
            if($carta['raridade'] == 'Ultra Rare') $badge_class = 'badge-ultra';
            if($carta['raridade'] == 'Rare') $badge_class = 'badge-rare';
          ?>
            <div class="card-item">
              <div class="card-img">
                <img src="<?php echo $carta['imagem']; ?>" alt="<?php echo $carta['nome']; ?>"/>
              </div>
              <div class="card-name"><?php echo $carta['nome']; ?></div>
              <span class="badge <?php echo $badge_class; ?>"><?php echo $carta['raridade']; ?></span><br/>
              <div class="card-price">R$ <?php echo number_format($carta['preco'], 2, ',', '.'); ?></div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>

    <div>
      <div class="section-head">
        <h3 class="titulo-secao" style="margin-bottom:0">Carta da semana</h3>
        <a href="#" class="ver-link">Ver detalhes</a>
      </div>
      <?php
      $sql_semana = "SELECT * FROM cartas WHERE carta_semana = 1 LIMIT 1";
      $res_semana = mysqli_query($conexao, $sql_semana);
      $semana = mysqli_fetch_assoc($res_semana);
      ?>
      <div class="carta-semana section-box" style="margin-bottom:0">
        <div class="carta-semana-img">
          <img src="<?php echo $semana['imagem']; ?>" alt="<?php echo $semana['nome']; ?>"/>
        </div>
        <h4><?php echo $semana['nome']; ?></h4>
        <span class="cs-set"><?php echo $semana['colecao']; ?></span>
        <div class="cs-price">R$ <?php echo number_format($semana['preco'], 2, ',', '.'); ?></div>
        <a href="#" class="btn-outline">Ver detalhes ›</a>
      </div>
    </div>

  </div>

  <!-- LANÇAMENTOS + BOOSTERS -->
  <div class="two-cols">

    <div>
      <div class="section-head">
        <h3 class="titulo-secao" style="margin-bottom:0">Lançamentos</h3>
        <a href="#" class="ver-link">Ver todas →</a>
      </div>
      <div class="section-box" style="margin-bottom:0">
        <div class="mini-scroll">
          <?php
          $sql_lanc = "SELECT * FROM cartas ORDER BY id DESC LIMIT 4";
          $res_lanc = mysqli_query($conexao, $sql_lanc);
          while($lanc = mysqli_fetch_assoc($res_lanc)) {
          ?>
            <div class="mini-card">
              <div class="mini-card-img">
                <img src="<?php echo $lanc['imagem']; ?>" alt="<?php echo $lanc['nome']; ?>"/>
              </div>
              <div class="mini-card-name"><?php echo $lanc['nome']; ?></div>
              <div class="mini-card-price">R$ <?php echo number_format($lanc['preco'], 2, ',', '.'); ?></div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>

    <div>
      <div class="section-head">
        <h3 class="titulo-secao" style="margin-bottom:0">Boosters disponíveis</h3>
        <a href="#" class="ver-link">Ver todos →</a>
      </div>
      <div class="section-box" style="margin-bottom:0">
        <div class="mini-scroll">
          <?php
          $sql_boost = "SELECT * FROM boosters";
          $res_boost = mysqli_query($conexao, $sql_boost);
          while($boost = mysqli_fetch_assoc($res_boost)) {
          ?>
            <div class="mini-card">
              <div class="booster-img" style="background:<?php echo $boost['cor_bg']; ?>"></div>
              <div class="mini-card-name"><?php echo $boost['nome']; ?></div>
              <div class="mini-card-price">R$ <?php echo number_format($boost['preco'], 2, ',', '.'); ?></div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>

  </div>

  <!-- TROCAS -->
  <div class="trocas-grid">
    <div class="trocas-cta section-box" style="margin-bottom:0">
      <h3>Centro de Trocas</h3>
      <p>Encontre cartas disponíveis para trocar com outros treinadores!</p>
      <a href="#" class="btn-primary" style="justify-content:center;">
        Ver trocas
        <svg width="12" height="12" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0 L9 7 L16 8 L9 9 L8 16 L7 9 L0 8 L7 7 Z"/></svg>
      </a>
    </div>

    <div>
      <div class="section-head">
        <h3 class="titulo-secao" style="margin-bottom:0">Trocas ativas</h3>
        <a href="#" class="ver-link">Ver mais trocas</a>
      </div>
      <div class="section-box" style="margin-bottom:0">
        <?php
        $sql_trocas = "SELECT * FROM trocas LIMIT 3";
        $res_trocas = mysqli_query($conexao, $sql_trocas);
        while($troca = mysqli_fetch_assoc($res_trocas)) {
        ?>
          <a href="#" class="troca-item">
            <div class="troca-avatar">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#e8919e" stroke-width="2">
                <circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
              </svg>
            </div>
            <div>
              <div class="troca-user"><?php echo $troca['usuario']; ?></div>
              <div class="troca-desc">Procura: <?php echo $troca['procura']; ?> &nbsp;·&nbsp; Oferece: <?php echo $troca['oferece']; ?></div>
            </div>
            <span class="btn-ver">Ver troca</span>
          </a>
        <?php } ?>
      </div>
    </div>
  </div>

  <!-- SOBRE + POR QUE -->
  <div class="bottom-grid">
    <div class="info-box section-box">
      <h3 class="titulo-secao">Sobre nós</h3>
      <p>Somos apaixonados por Pokémon e por colecionar cartas especiais. Nosso objetivo é reunir cartas fofas, raras e colecionáveis em um único lugar para facilitar trocas e compras.</p>
      <p style="margin-top:10px">Acreditamos que cada carta tem uma história e merece encontrar um treinador que realmente a valorize.</p>
    </div>

    <div class="info-box section-box">
      <h3 class="titulo-secao">Por que escolher nossa loja?</h3>
      <div class="porque-grid">
        <div class="porque-item">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e8919e" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Cartas verificadas</span>
        </div>
        <div class="porque-item">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e8919e" stroke-width="2"><polyline points="17 1 21 5 17 9"/><path d="M3 11V9a4 4 0 0 1 4-4h14"/><polyline points="7 23 3 19 7 15"/><path d="M21 13v2a4 4 0 0 1-4 4H3"/></svg>
          <span>Trocas seguras</span>
        </div>
        <div class="porque-item">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e8919e" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
          <span>Boosters originais</span>
        </div>
        <div class="porque-item">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e8919e" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <span>Atendimento rápido</span>
        </div>
        <div class="porque-item">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e8919e" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
          <span>Atualizações frequentes</span>
        </div>
        <div class="porque-item">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e8919e" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <span>Raras e colecionáveis</span>
        </div>
      </div>
    </div>
  </div>

</main>

<?php include("footer.php"); ?>
