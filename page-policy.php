<?php get_header(); ?>


<body <?php body_class('fo'); ?> ontouchstart="">

  <div class="wrapper">

    <main id="main-top">

      <!-- パンくずリスト -->
      <?php if( !(is_home() || is_front_page() )): ?>
        <div class="breadcrumb-area">
          <?php
          if ( function_exists( 'bcn_display' ) ) {
            bcn_display();
          }
          ?>
        </div>
      <?php endif; ?>

  
    <div class="main-tit-block main-top">

      <div class="main-tit">
        <h2>POLICY</h2>
        <span>政策</span>
      </div>
    </div>
    
    <div class="policy-top">
      <div class="policy-top-inner">
        <div class="policy-top-left">
          <picture class="policy-top-image sa sa--up">
            <source media="(max-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pol-page-tit-sp.png" alt="京都南部から日本再生。夢や挑戦であふれる国づくり"> 
            <source media="(min-width: 561px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pol-page-tit.png" alt="京都南部から日本再生。夢や挑戦であふれる国づくり">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pol-page-tit.png" alt="京都南部から日本再生。夢や挑戦であふれる国づくり">
          </picture>
          <div class="policy-top-three">
            <div class="policy-top-three-tit">
              <picture class="policy-top-image sa sa--up">
                <source media="(max-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pol-page-three-sp.svg" alt="3つの信条"> 
                <source media="(min-width: 561px)" srcset="<?php echo get_template_directory_uri(); ?>/images/pol-page-three.svg" alt="3つの信条">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pol-page-three.svg" alt="3つの信条">
              </picture>
            </div>
            <div class="policy-top-three-text sa sa--up">
              <div class="policy-top-three-text-line">
                <span>Mindset</span>
                <p>夢や希望を大いに語ること、<span class="aks">できることから始める</span></p>
              </div>
              <div class="policy-top-three-text-line">
                <span>Backcasting</span>
                <p>未来から今を逆算して、<span class="aks">今、すべきことに取り組む</span></p>
              </div>
              <div class="policy-top-three-text-line">
                <span>Redesign</span>
                <p>より良きものへ、<span class="aks">常に見直しを図る</span></p>
              </div>
            </div>
          </div>
        </div>

        <div class="policy-top-right">
          <picture class="policy-top-image sa sa--up">
            <source media="(max-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/images/sono-policy-sp.png" alt="そのさき弘道 政策画像"> 
            <source media="(min-width: 561px)" srcset="<?php echo get_template_directory_uri(); ?>/images/sono-policy.png" alt="そのさき弘道 政策画像">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sono-policy.png" alt="そのさき弘道 政策画像">
          </picture>
        </div>
        
      </div>
    </div>


  <div class="main-column policy" id="policy">

    <div class="policy-columns">

      <div class="policy-columns-top">
        <picture class="policy-top-image">
          <source media="(max-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/images/five-challange-sp.svg" alt="そのさき弘道5つのチャレンジ"> 
          <source media="(min-width: 561px)" srcset="<?php echo get_template_directory_uri(); ?>/images/five-challange.svg" alt="そのさき弘道5つのチャレンジ">
          <img src="<?php echo get_template_directory_uri(); ?>/images/five-challange.svg" alt="そのさき弘道5つのチャレンジ">
        </picture>

      </div>

      <div class="policy-columns-box" id="pol-1">
        <div class="policy-columns-box-image policy-columns-box-image-1 sa sa--up">
          <div class="pol-columns-tit sa sa--up tit-long ">
            <span class="pol-columns-tit-num">
              01
            </span>
            <p>安全保障、経済・食料安全保障</p>
          </div>
        </div>

        <div class="pol-columns-text sa sa--up">
          <div class="top-tit">
            <p>国民の命と平和、日本を護る！</p>
          </div>
          <p class="text">秩序が脅かされる世界情勢の中、日本の平和と安全を守り、危機を回避するためには、「高い防衛能力」を備えることと、そのことを可能とする「憲法改正」が不可欠です。また、サイバーセキュリティの強化、食料自給率の向上、重要物資や原材料の供給体制の強靱化を図る等、危機に毅然と立ち向かえる強い日本を目指します。
感染症対策に加え、気候変動に伴う自然災害への備えとして、
京都南部での被害を未然に防ぐ対策に取り組みます。
          </p>

          <div class="pol-columns-point">
            <div>
              <p><span class="aks">平和と安全を守るための</span><span class="aks">防衛体制の構築と憲法改正の実現</span></p>
              <p><span class="aks">日本の農林水産業の再生と</span>エネルギー自給率の向上</p>
              <p class="last"><span class="aks">複雑多様化する犯罪への</span><span class="aks">備えの強化と治安維持</span></p>
              
            </div>
          </div>

        </div>

      </div>

      <div class="policy-columns-box" id="pol-2">
        <div class="policy-columns-box-image policy-columns-box-image-2 sa sa--up">
          <div class="pol-columns-tit sa sa--up">
            <span class="pol-columns-tit-num">
              02
            </span>
            <p>インフラ･投資</p>
          </div>
        </div>

        <div class="pol-columns-text sa sa--up">
          <div class="top-tit">
            <p>京都南部から日本が動き出す！</p>
          </div>
          <p class="text">京都南部は、新名神高速道路、北陸新幹線（京都南部ルート）といった国主導の整備が進む地域です。これらのインパクトを最大限にいかすため、京都南部12市町村で各種まちづくりの計画が策定されています。国や京都府との連携に加え、民間企業の積極的な投資も引き出し、輝く地域作りに挑戦します。
国土軸のハブ拠点には、「ヒト・モノ・カネ・情報」が集まることになります。歴史と伝統が流れる京都南部において、新しい経済の化学反応が無数に誘発されることを応援し、元気な地域経済を取り戻します。「日本全国、世界からも注目される京都南部」の実現、その先に、「日本の再生と成長」があると信じています。
          </p>

          <div class="pol-columns-point">
            <div>
              <p><span class="aks"><span class="aks">新名神高速道路の段階的開通の働きかけと</span>京都府南部道路網の整備</p>
              <p><span class="aks">北陸新幹線京都ルートの</span>早期実現への取組</p>
              <p><span class="aks">インフラ整備と連動により</span>京都南部へ新たな投資を引き出す</p>
              <p><span class="aks">積極的な財政出動により賃上げ、</span>デフレ脱却、日本経済再興へ</p>
              <p class="last"><span class="aks">宇治川･木津川流域の</span>一体的な治水対策の取組</p>
            </div>
          </div>

        </div>

      </div>


      <div class="policy-columns-box" id="pol-3">
        <div class="policy-columns-box-image policy-columns-box-image-3 sa sa--up">
          <div class="pol-columns-tit sa sa--up">
            <span class="pol-columns-tit-num">
              03
            </span>
            <p>社会保障・福祉</p>
          </div>
        </div>


        <div class="pol-columns-text sa sa--up">
          <div class="top-tit">
            <p>安心して暮らせる地域社会の構築！</p>
          </div>
          <p class="text">山城地域には、かつて恭仁京（現在の木津川市）に都が置かれました。また、宇治茶の歴史は、「日本茶800年の歴史散歩」として、「日本遺産第一号」に認定され、世界に誇る日本の文化そのものです。国家プロジェクト「けいはんな学研都市」には、最先端のテクノロジーと英知が集積されています。少子・高齢化、人口減少は、日本の大きな社会的課題でありますが、地域内循環型の新しい未来社会モデルを築く転換期と捉え、京都南部の新時代の地域づくりに挑戦していきます。若者や女性の起業等のチャレンジを応援するとともに、農林業、小売、建設、観光等の地元企業のさらなる生産性向上に向けて、地域内の経済循環を促進し、柔軟な発想と新技術の積極的活用等を通じ競争力強化を実現します。
          </p>

          <div class="pol-columns-point">
            <div>
              <p>持続可能で安心な社会保障制度の再構築</p>
              <p>子どもは社会の宝、子育て共働き世代の声を形に</p>
              <p>地域の人の絆が生み出す幸福度の高い地域社会の実現</p>
              <p class="last">保育士、介護職員等、医療、福祉現場に関わる方の処遇改善</p>
            </div>
          </div>
        </div>
      </div>

      <div class="policy-columns-box" id="pol-4">
        <div class="policy-columns-box-image policy-columns-box-image-4 sa sa--up">
          <div class="pol-columns-tit sa sa--up">
            <span class="pol-columns-tit-num">
              04
            </span>
            <p>夢づくり･教育</p>
          </div>
        </div>

        <div class="pol-columns-text sa sa--up">
          <div class="top-tit">
            <p>豊かな心の醸成、<span class="aks">夢と希望にあふれる人づくり</span></p>
          </div>
           <p class="text">スポーツ・文化活動、読書、自然体験活動、地域活動といった子どもたちの好奇心に応える教育は、地域や世代を超えて、人と人とがつながり、喜怒哀楽の様々な感情を経験することができます。自然への敬意、家族や地域の絆の大切さ、命の尊さを体感する中で、子どもの自立や社会性が養われ、豊かな心の醸成へとつながります。また、保育・教育分野と子育て世代への支援への予算の充実と、貧困等の理由による教育機会の格差、学力格差の解消を目指します。子どもたちが、将来に夢や希望が見いだせる環境づくりに取り組みます。
          
          </p>

          <div class="pol-columns-point">
            <div>
              <p><span class="aks">若者の挑戦を応援、再挑戦に寛容な社会へ</p>
              <p><span class="aks">教育機会の格差是正、学力格差の解消の取組</p>
              <p class="last">将来に夢や希望が見いだせる環境作り</p>
            </div>
          </div>

        </div>

      </div>

      

      <div class="policy-columns-box" id="pol-5">
        <div class="policy-columns-box-image policy-columns-box-image-5 sa sa--up">
          <div class="pol-columns-tit sa sa--up">
            <span class="pol-columns-tit-num">
              05
            </span>
            <p>地域づくり・地域内循環</p>
          </div>
        </div>

        <div class="pol-columns-text sa sa--up">
          <div class="top-tit">
            <p>京都南部の未来創造 <span class="aks">～その先に広がる未来へ～</span></p>
          </div>
         <p class="text">高齢化の進む中ではありますが、全ての世代の方々が安心して暮らせる住みよい地域社会を実現するためには、国民皆保険・皆年金体制を今後も維持していく必要があります。地域の中での相互連携の取組を通じて、人と人との絆づくりを応援し、幸福度の高い地域社会の実現を目指します。また、福祉に関わる方の処遇改善にも取り組み、福祉人材の確保を応援します。国家的課題である少子化問題に対し、子育て世代の声に耳を傾け、真に必要とされる支援･対策を講じ、積極的な将来への子育て投資を拡大していきます。
          </p>

          <div class="pol-columns-point">
            <div>
              <p>地産地消の推進と<span class="aks">地域内経済循環モデルの構築</span></p>
              <p>「お茶の京都」エリアの<span class="aks">魅力発信強化と</span><span class="aks">交流人口増の取組</span></p>
              <p>持続可能な<span class="aks">地域交通の構築</span></p>
              <p class="last">過疎地域での暮らしを<span class="aks">応援するための</span><span class="aks">新技術の開発と活用</span></p>
            </div>
          </div>

        </div>

      </div>

      


    </div>

  </div><!-- /#policy -->


</div>



</main>
<?php get_footer(); ?>
