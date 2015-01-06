<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Article;

/**
 * ArticleSearch represents the model behind the search form about `app\models\Article`.
 */
class ArticleSearch extends Article
{
    /**
     * @inheritdoc
     */
	 
	public $user;
	
    public function rules()
    {
        return [
            [['id', 'group', 'kategori', 'user_id'], 'integer'],
            [['title', 'content', 'tags', 'date_publish', 'published', 'user'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params, $kategori=NULL)
    {
        $query = Article::find();

		$query->joinWith(['user']);
		if($kategori==NULL){
			$query->where('kategori<>3');	
		}elseif($kategori=='3' || strtolower($kategori)=='kegiatan'){
			$query->where('kategori=3');
		}
		 
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

		$dataProvider->sort->attributes['user'] = [
			// The tables are the ones our relation are configured to
			// in my case they are prefixed with "tbl_"
			'asc' => ['user.nama' => SORT_ASC],
			'desc' => ['user.nama' => SORT_DESC],
		];

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'group' => $this->group,
            'kategori' => $this->kategori,
            'user_id' => $this->user_id,
            'date_publish' => $this->date_publish,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'tags', $this->tags])
            ->andFilterWhere(['like', 'published', $this->published])
			->andFilterWhere(['like', 'user.nama', $this->user]);
        return $dataProvider;
    }
}
