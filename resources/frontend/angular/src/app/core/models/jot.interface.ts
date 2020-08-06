export interface Jot {
    id: number;
    user_id: number;
    title: string;
    description: string;
    slug: string;
    order_column?: number;
    created_at?: Date;
    updated_at?: Date;
}
